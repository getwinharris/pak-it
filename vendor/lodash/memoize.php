<?php
$MapCache = require __DIR__ . '/_MapCache.php';
$FUNC_ERROR_TEXT = 'Expected a function';
function memoize($func, $resolver) {
    if (!is_callable($func) || $resolver != null && !is_callable($resolver)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    $memoized = function() {
        $args = $arguments;
        $key = ($resolver ? $resolver['apply']($this, $args) : $args[0]);
        $cache = $memoized['cache'];
        if ($cache['has']($key)) {
            return $cache['get']($key);
        }
        $result = $func['apply']($this, $args);
        $memoized['cache'] = $cache['set']($key, $result) || $cache;
        return $result;
};
    $memoized['cache'] = new $memoize['Cache'] || $MapCache();
    return $memoized;
}
$memoize['Cache'] = $MapCache;
return 'memoize';
