<?php

class VerifyCommand
{
    public function run(): void
    {
        $vendorDir = __DIR__ . '/../vendor';

        if (!is_dir($vendorDir)) {
            echo "No vendor/ directory found.\n";
            return;
        }

        $checker = new SyntaxCheck();
        $result = $checker->run($vendorDir);

        echo "Checked {$result['total']} PHP files.\n";

        if ($result['errors']) {
            echo "Found " . count($result['errors']) . " files with errors:\n";
            foreach ($result['errors'] as $e) {
                $rel = str_replace(__DIR__ . '/../', '', $e['file']);
                echo "  $rel\n";
                foreach ($e['errors'] as $line) echo "    $line\n";
            }
        } else {
            echo "All files pass syntax check.\n";
        }
    }
}
