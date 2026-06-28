<?php
$apply = require __DIR__ . '/_apply.php';
$baseEach = require __DIR__ . '/_baseEach.php';
$baseInvoke = require __DIR__ . '/_baseInvoke.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
$invokeMap = $baseRest(function($collection, $path, $args) {
        $index = -1;
        $isFunc = is_callable($path);
        $result = ($isArrayLike($collection) ? array_fill(0, (is_array($collection) ? count($collection) : strlen($collection)), null) : []);
        $baseEach($collection, function($value) {
        $result[++$index] = ($isFunc ? $apply($path, $value, $args) : $baseInvoke($value, $path, $args));
});
        return $result;
});
return 'invokeMap';
