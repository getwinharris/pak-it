<?php

class RunCommand
{
    public function run(string $name, array $args): void
    {
        // 1. Check pkg-run.json for a configured command
        $configPath = __DIR__ . '/../pkg-run.json';
        if (file_exists($configPath)) {
            $config = json_decode(file_get_contents($configPath), true);
            if (isset($config[$name])) {
                $this->runViaRunner($name, $config[$name], $args);
                return;
            }
        }

        // 2. Fallback: try PHP entry point in vendor/
        $vendorDir = __DIR__ . '/../vendor/' . $name;

        if (!is_dir($vendorDir)) {
            echo "Package '$name' not installed.\n";
            echo "Try: php pak-it init $name\n";
            echo "Or add it to pkg-run.json for npx/pip-based packages.\n";
            return;
        }

        $entry = $this->findEntryPoint($name, $vendorDir);

        if (!$entry || !file_exists($entry)) {
            echo "No CLI entry found for '$name'.\n";
            echo "Looked in: $vendorDir\n";
            return;
        }

        $GLOBALS['argv'] = array_merge([$entry], $args);
        $_SERVER['argv'] = $GLOBALS['argv'];
        require $entry;
    }

    private function runViaRunner(string $name, array $config, array $args): void
    {
        $command = $config['command'] ?? $name;
        $cmd = $command . ' ' . implode(' ', array_map('escapeshellarg', $args));

        echo "  running: $cmd\n\n";

        passthru($cmd, $exitCode);
        exit($exitCode);
    }

    private function findEntryPoint(string $name, string $vendorDir): ?string
    {
        $pkgJson = "$vendorDir/package.json";
        $entry = null;

        if (file_exists($pkgJson)) {
            $info = json_decode(file_get_contents($pkgJson), true);
            $bin = $info['bin'] ?? null;
            if ($bin) {
                if (is_string($bin)) {
                    $entry = $vendorDir . '/' . $bin;
                } elseif (is_array($bin)) {
                    $entry = $vendorDir . '/' . reset($bin);
                }
            }
        }

        if (!$entry) {
            $candidates = [
                "$vendorDir/bin/$name.php",
                "$vendorDir/cli.php",
                "$vendorDir/bin/cli.php",
                "$vendorDir/src/cli.php",
                "$vendorDir/index.php",
            ];

            $binDir = "$vendorDir/bin";
            if (is_dir($binDir)) {
                foreach (scandir($binDir) as $f) {
                    if (pathinfo($f, PATHINFO_EXTENSION) === 'php') {
                        array_unshift($candidates, "$binDir/$f");
                    }
                }
            }

            foreach ($candidates as $c) {
                if (file_exists($c)) { $entry = $c; break; }
            }
        }

        return $entry;
    }
}
