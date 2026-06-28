<?php

class RunCommand
{
    public function run(string $name, array $args): void
    {
        $vendorDir = __DIR__ . '/../vendor/' . $name;

        if (!is_dir($vendorDir)) {
            echo "Package '$name' not installed.\n";
            echo "Try: php pak-it init $name\n";
            return;
        }

        // Read package.json for bin entry
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

        // Fallback candidates
        if (!$entry) {
            $candidates = [
                "$vendorDir/bin/$name.php",
                "$vendorDir/cli.php",
                "$vendorDir/bin/cli.php",
                "$vendorDir/src/cli.php",
                "$vendorDir/index.php",
            ];

            // Also check bin/ for any php files
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

        if (!$entry || !file_exists($entry)) {
            echo "No CLI entry found for '$name'.\n";
            echo "Looked in: $vendorDir\n";
            return;
        }

        // Set argv for the target script
        $GLOBALS['argv'] = array_merge([$entry], $args);
        $_SERVER['argv'] = $GLOBALS['argv'];

        // Run it
        require $entry;
    }
}
