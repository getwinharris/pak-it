<?php

class Downloader
{
    public function download(array $info, string $targetDir): void
    {
        $tarball = $info['tarball'];
        $tmp = sys_get_temp_dir() . '/pak-it-' . uniqid();
        mkdir($tmp, 0755, true);

        echo "    Fetching $tarball\n";

        // Download tarball
        $data = @file_get_contents($tarball, false, stream_context_create([
            'http' => ['timeout' => 30, 'user_agent' => 'pak-it/1.0']
        ]));
        if (!$data) throw new RuntimeException("Failed to download $tarball");
        file_put_contents("$tmp/package.tar.gz", $data);

        // Extract
        $phar = new PharData("$tmp/package.tar.gz");
        $phar->extractTo($tmp);

        // Remove the tar.gz
        unlink("$tmp/package.tar.gz");

        // Find the package dir (first subdirectory after extraction)
        $items = array_diff(scandir($tmp), ['.', '..']);
        $extracted = null;
        // Check for package/ directory (npm style)
        if (is_dir("$tmp/package")) {
            $extracted = "$tmp/package";
        } else {
            // Find first subdir
            foreach ($items as $item) {
                if (is_dir("$tmp/$item")) { $extracted = "$tmp/$item"; break; }
            }
        }
        if (!$extracted) throw new RuntimeException("No package directory found in tarball");

        // Remove old target if exists
        if (is_dir($targetDir)) $this->delTree($targetDir);

        // Copy to vendor/
        $this->copyDir($extracted, $targetDir);
        $this->delTree($tmp);

        echo "    Extracted to $targetDir\n";
    }

    private function copyDir(string $src, string $dst): void
    {
        if (!is_dir($dst)) mkdir($dst, 0755, true);
        foreach (scandir($src) as $f) {
            if ($f[0] === '.') continue;
            $s = "$src/$f";
            $d = "$dst/$f";
            is_dir($s) ? $this->copyDir($s, $d) : copy($s, $d);
        }
    }

    private function delTree(string $dir): void
    {
        if (!is_dir($dir)) return;
        foreach (scandir($dir) as $f) {
            if ($f[0] === '.') continue;
            $p = "$dir/$f";
            is_dir($p) ? $this->delTree($p) : unlink($p);
        }
        rmdir($dir);
    }
}
