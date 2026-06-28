<?php

class PythonConverter
{
    public function convert(string $dir): int
    {
        $count = 0;
        $files = new RecursiveIteratorIterator(
            new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS)
        );
        foreach ($files as $file) {
            if ($file->getExtension() !== 'py') continue;
            $path = $file->getPathname();
            $phpPath = preg_replace('/\.py$/', '.php', $path);

            $content = file_get_contents($path);
            $php = $this->convertCode($content);

            file_put_contents($phpPath, "<?php\n\n" . $php . "\n");
            unlink($path);
            $count++;
        }
        return $count;
    }

    public function convertCode(string $code): string
    {
        // Remove __pycache__ style comments
        // Basic Python -> PHP (MVP)

        // def -> function
        $code = preg_replace('/^def\s+(\w+)\s*\(/m', 'function $1(', $code);

        // class -> class
        // class Foo: -> class Foo {}
        $code = preg_replace('/^class\s+(\w+)\s*[:\(]/m', 'class $1 {', $code);
        $code = preg_replace('/^class\s+(\w+)\s*$/m', 'class $1 {', $code);

        // self -> $this
        $code = preg_replace('/\bself\b/', '$this', $code);

        // print() -> echo
        $code = preg_replace('/\bprint\s*\(/', 'echo (', $code);

        // import -> require
        $code = preg_replace('/^import\s+(\w+)/m', '// require $1.php', $code);
        $code = preg_replace('/^from\s+(\w+)\s+import\s+(.+)/m', '// from $1 import $2', $code);

        // # comments -> // comments
        $code = preg_replace('/^(\s*)#\s(.*)/m', '$1// $2', $code);

        // return None -> return null
        $code = preg_replace('/\bNone\b/', 'null', $code);
        $code = preg_replace('/\bTrue\b/', 'true', $code);
        $code = preg_replace('/\bFalse\b/', 'false', $code);

        // len(x) -> count($x)
        $code = preg_replace('/\blen\(/', 'count(', $code);

        // range(x) -> range(0, $x) - PHP range needs params
        // Skip for MVP

        return $code;
    }
}
