<?php

class InstallCommand
{
    public function run(): void
    {
        $configFile = __DIR__ . '/../pak-it.toml';

        if (!file_exists($configFile)) {
            echo "No pak-it.toml found.\n";
            echo "Create one with:\n";
            echo '  [require]' . "\n";
            echo '  npm = ["lodash", "axios"]' . "\n";
            echo '  pip = ["numpy"]' . "\n";
            return;
        }

        echo "==> Reading pak-it.toml...\n";
        $config = parse_ini_file($configFile, true);
        if (!$config || !isset($config['require'])) {
            echo "No [require] section found in pak-it.toml\n";
            return;
        }

        $require = $config['require'];
        $packages = [];

        foreach ($require as $registry => $list) {
            if (is_string($list)) $list = [$list];
            foreach ($list as $pkg) {
                $packages[] = ['name' => trim($pkg), 'registry' => $registry];
            }
        }

        if (!$packages) {
            echo "No packages to install.\n";
            return;
        }

        echo "==> Installing " . count($packages) . " packages...\n";

        $initCmd = new InitCommand();
        foreach ($packages as $pkg) {
            echo "\n--- Installing {$pkg['name']} ---\n";
            $initCmd->run([$pkg['name']]);
        }

        echo "\n==> All packages installed.\n";
    }
}
