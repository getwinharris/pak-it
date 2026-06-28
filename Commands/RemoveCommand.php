<?php

class RemoveCommand
{
    public function run(array $args): void
    {
        if (!$args) {
            echo "Usage: php pak-it remove <package>... [--all]\n";
            echo "       php pak-it remove lodash\n";
            echo "       php pak-it remove lodash axios chalk\n";
            return;
        }

        $all = in_array('--all', $args, true);
        if ($all) {
            $args = array_filter($args, fn($a) => $a !== '--all');
        }

        $vendorDir = __DIR__ . '/../vendor';
        $removed = 0;

        if ($all) {
            // Remove all packages
            foreach (glob($vendorDir . '/*', GLOB_ONLYDIR) as $pkgDir) {
                $name = basename($pkgDir);
                if ($name === 'autoload.php' || $name[0] === '.') continue;
                $this->delTree($pkgDir);
                echo "  Removed: $name\n";
                $removed++;
            }
            echo "\nRemoved $removed packages.\n";
        } else {
            foreach ($args as $name) {
                $pkgDir = $vendorDir . '/' . basename($name);
                if (!is_dir($pkgDir)) {
                    echo "  Package '$name' not found in vendor/\n";
                    continue;
                }
                $this->delTree($pkgDir);
                echo "  Removed: $name\n";
                $removed++;
            }
            echo "\nRemoved $removed packages.\n";
        }

        // Regenerate autoloader if anything was removed
        if ($removed > 0) {
            require_once __DIR__ . '/../src/Autoloader.php';
            (new Autoloader())->generate($vendorDir);
        }
    }

    private function delTree(string $dir): void
    {
        if (!is_dir($dir)) return;
        $items = scandir($dir);
        if ($items === false) throw new RuntimeException("Failed to scan: $dir");
        foreach ($items as $f) {
            if ($f[0] === '.') continue;
            $p = "$dir/$f";
            if (is_link($p) || !is_dir($p)) {
                unlink($p);
            } else {
                $this->delTree($p);
            }
        }
        rmdir($dir);
    }
}
