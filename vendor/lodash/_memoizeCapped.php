<?php
$memoize = require __DIR__ . '/memoize.php';
$MAX_MEMOIZE_SIZE = 500;
function memoizeCapped($func) {
    $result = $memoize($func, function($key) {
        if ($cache['size'] === $MAX_MEMOIZE_SIZE) {
            $cache['clear']();
        }
        return $key;
});
    $cache = $result['cache'];
    return $result;
}
return 'memoizeCapped';
