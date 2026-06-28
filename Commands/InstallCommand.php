<?php

class InstallCommand
{
    public function run(): void
    {
        $config = $this->readConfig();
        if (!$config) return;

        $initCmd = new InitCommand();
        foreach ($config as $name => $version) {
            echo "\n--- Installing $name" . ($version !== 'latest' ? " @ $version" : '') . " ---\n";
            $initCmd->run([$name, $version]);
        }

        echo "\n==> All packages installed.\n";
    }

    private function readConfig(): ?array
    {
        $jsonFile = __DIR__ . '/../pak-it.json';
        $tomlFile = __DIR__ . '/../pak-it.toml';

        // Prefer pak-it.json
        if (file_exists($jsonFile)) {
            $raw = file_get_contents($jsonFile);
            $parsed = json_decode($raw, true);
            if (!$parsed || !isset($parsed['require'])) {
                echo "Error: pak-it.json is invalid or missing [require] section.\n";
                return null;
            }
            echo "==> Reading pak-it.json...\n";
            return $parsed['require'];
        }

        // Fallback to pak-it.toml with minimal parser
        if (file_exists($tomlFile)) {
            echo "==> Reading pak-it.toml...\n";
            return $this->parseTomlRequire($tomlFile);
        }

        echo "No pak-it.json or pak-it.toml found.\n";
        echo "Create one:\n";
        echo '  {"require": {"lodash": "4.18.1", "axios": "latest"}}' . "\n";
        return null;
    }

    private function parseTomlRequire(string $path): ?array
    {
        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (!$lines) return null;

        $inRequire = false;
        $packages = [];

        foreach ($lines as $line) {
            $line = trim($line);

            // Comment
            if ($line === '' || $line[0] === '#' || $line[0] === ';') continue;

            // Section header
            if ($line[0] === '[') {
                $inRequire = strtolower(rtrim($line, ']')) === '[require';
                continue;
            }

            if (!$inRequire) continue;

            // package = "version" or package = "latest"
            if (preg_match('/^"([^"]+)"\s*=\s*"([^"]*)"$/', $line, $m)) {
                $packages[$m[1]] = $m[2] ?: 'latest';
            } elseif (preg_match('/^(\S+)\s*=\s*"([^"]*)"$/', $line, $m)) {
                $packages[$m[1]] = $m[2] ?: 'latest';
            }
        }

        if (!$packages) {
            echo "No packages found in [require] section of pak-it.toml\n";
            echo "Format: package_name = \"version\"\n";
            return null;
        }

        return $packages;
    }
}
