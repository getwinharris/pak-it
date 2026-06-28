<?php

class InitCommand
{
    public function run(array $args): void
    {
        if (!$args) {
            echo "Usage: php pak-it init <package> [version]\n";
            echo "       php pak-it require <package> [version]\n";
            return;
        }

        $name = $args[0];
        $version = $args[1] ?? 'latest';

        echo "==> Resolving $name...\n";
        $resolver = new Resolver();
        $info = $resolver->resolve($name);

        if (!$info) {
            echo "Error: Package '$name' not found in any registry.\n";
            return;
        }

        echo "    Found: {$info['name']}@{$info['version']} ({$info['registry']})\n";

        $targetDir = __DIR__ . '/../vendor/' . basename($name);

        echo "==> Downloading...\n";
        $downloader = new Downloader();
        try {
            $downloader->download($info, $targetDir);
        } catch (Exception $e) {
            echo "Error downloading: " . $e->getMessage() . "\n";
            return;
        }

        echo "==> Converting to PHP...\n";
        $convertCount = 0;
        if ($info['registry'] === 'npm') {
            $converter = new NodeConverter();
            $convertCount = $converter->convert($targetDir);
        } elseif ($info['registry'] === 'pypi') {
            $converter = new PythonConverter();
            $convertCount = $converter->convert($targetDir);
        }
        echo "    Converted $convertCount files\n";

        echo "==> Regenerating autoloader...\n";
        $autoloader = new Autoloader();
        $autoloader->generate(__DIR__ . '/../vendor');

        echo "==> Verifying syntax...\n";
        $checker = new SyntaxCheck();
        $result = $checker->run($targetDir);
        if ($result['errors']) {
            echo "    Warnings: " . count($result['errors']) . " files have issues\n";
            foreach (array_slice($result['errors'], 0, 5) as $e) {
                echo "      - " . basename(dirname($e['file'])) . "/" . basename($e['file']) . "\n";
            }
        } else {
            echo "    All files pass syntax check.\n";
        }

        echo "==> Done: $name@{$info['version']} installed\n";
    }
}
