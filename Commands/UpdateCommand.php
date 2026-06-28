<?php

class UpdateCommand
{
    public function run(array $args): void
    {
        $vendorDir = __DIR__ . '/../vendor';

        if (!$args) {
            echo "Usage: php pak-it update <package> [version]\n";
            echo "       php pak-it update --all\n";
            return;
        }

        $all = in_array('--all', $args, true);
        if ($all) {
            $this->updateAll($vendorDir);
            return;
        }

        $name = $args[0];
        $version = $args[1] ?? null;

        $pkgDir = "$vendorDir/" . basename($name);
        if (!is_dir($pkgDir)) {
            echo "Package '$name' is not installed.\n";
            echo "Install it first: php pak-it init $name $version\n";
            return;
        }

        echo "==> Updating $name" . ($version ? " @ $version" : '') . "...\n";

        // Re-resolve (optionally with new version)
        $resolver = new Resolver();
        $info = $resolver->resolve($name, $version);

        if (!$info) {
            echo "Error: Package '$name' not found in any registry.\n";
            return;
        }

        echo "    Found: {$info['name']}@{$info['version']} ({$info['registry']})\n";

        // Re-download (overwrites existing)
        echo "==> Re-downloading...\n";
        $downloader = new Downloader();
        try {
            $downloader->download($info, $pkgDir);
        } catch (Exception $e) {
            echo "Error downloading: " . $e->getMessage() . "\n";
            return;
        }

        // Re-convert
        echo "==> Re-converting to PHP...\n";
        $convertCount = 0;
        if ($info['registry'] === 'npm') {
            $converter = new AstConverter();
            $convertCount = $converter->convert($pkgDir);
        } elseif ($info['registry'] === 'pypi') {
            $converter = new PythonConverter();
            $convertCount = $converter->convert($pkgDir);
        }
        echo "    Converted $convertCount files\n";

        // Regenerate autoloader
        echo "==> Regenerating autoloader...\n";
        $autoloader = new Autoloader();
        $autoloader->generate($vendorDir);

        // Re-verify
        echo "==> Verifying syntax...\n";
        $checker = new SyntaxCheck();
        $result = $checker->run($pkgDir);
        if ($result['errors']) {
            echo "    Warnings: " . count($result['errors']) . " files have issues\n";
        } else {
            echo "    All files pass syntax check.\n";
        }

        echo "==> Done: $name updated to {$info['version']}\n";
    }

    private function updateAll(string $vendorDir): void
    {
        $packages = [];
        foreach (glob($vendorDir . '/*', GLOB_ONLYDIR) as $pkgDir) {
            $name = basename($pkgDir);
            if ($name === 'autoload.php' || $name[0] === '.') continue;
            $packages[] = $name;
        }

        if (!$packages) {
            echo "No packages installed.\n";
            return;
        }

        echo "==> Updating " . count($packages) . " packages...\n";
        foreach ($packages as $name) {
            echo "\n";
            $this->run([$name]);
        }
        echo "\n==> All packages updated.\n";
    }
}
