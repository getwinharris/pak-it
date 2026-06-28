<?php

class SyntaxCheck
{
    public function run(string $dir): array
    {
        $errors = [];
        $count = 0;

        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
        );

        foreach ($files as $file) {
            if ($file->getExtension() !== 'php') continue;
            $path = $file->getPathname();

            // Skip node_modules
            if (strpos($path, '/node_modules/') !== false) continue;

            $output = [];
            $return = 0;
            exec("php -l " . escapeshellarg($path) . " 2>&1", $output, $return);

            if ($return !== 0) {
                $errors[] = ['file' => $path, 'errors' => $output];
            }
            $count++;
        }

        return ['total' => $count, 'errors' => $errors];
    }
}
