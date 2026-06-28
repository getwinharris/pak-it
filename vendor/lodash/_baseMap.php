<?php
$baseEach = require __DIR__ . '/_baseEach.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
function baseMap($collection, $iteratee) {
    $index = -1;
    $result = ($isArrayLike($collection) ? array_fill(0, (is_array($collection) ? count($collection) : strlen($collection)), null) : []);
    $baseEach($collection, function($value, $key, $collection) {
        $result[++$index] = $iteratee($value, $key, $collection);
});
    return $result;
}
return 'baseMap';
