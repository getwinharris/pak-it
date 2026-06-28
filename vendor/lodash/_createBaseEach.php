<?php
$isArrayLike = require __DIR__ . '/isArrayLike.php';
function createBaseEach($eachFunc, $fromRight) {
    return function($collection, $iteratee) {
        if ($collection == null) {
            return $collection;
        }
        if (!$isArrayLike($collection)) {
            return $eachFunc($collection, $iteratee);
        }
        $length = (is_array($collection) ? count($collection) : strlen($collection));
        $index = ($fromRight ? $length : -1);
        $iterable = Object($collection);
        while (($fromRight ? $index-- : ++$index < $length)) {
            if ($iteratee($iterable[$index], $index, $iterable) === false) {
                break;
            }
        }
        return $collection;
};
}
return 'createBaseEach';
