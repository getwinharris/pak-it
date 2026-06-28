<?php
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
$keys = require __DIR__ . '/keys.php';
function createFind($findIndexFunc) {
    return function($collection, $predicate, $fromIndex) {
        $iterable = Object($collection);
        if (!$isArrayLike($collection)) {
            $iteratee = $baseIteratee($predicate, 3);
            $collection = $keys($collection);
            $predicate = function($key) {
        return $iteratee($iterable[$key], $key, $iterable);
};
        }
        $index = $findIndexFunc($collection, $predicate, $fromIndex);
        return ($index > -1 ? $iterable[($iteratee ? $collection[$index] : $index)] : null);
};
}
return 'createFind';
