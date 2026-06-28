<?php
$Symbol = require __DIR__ . '/_Symbol.php';
$copyArray = require __DIR__ . '/_copyArray.php';
$getTag = require __DIR__ . '/_getTag.php';
$isArrayLike = require __DIR__ . '/isArrayLike.php';
$isString = require __DIR__ . '/isString.php';
$iteratorToArray = require __DIR__ . '/_iteratorToArray.php';
$mapToArray = require __DIR__ . '/_mapToArray.php';
$setToArray = require __DIR__ . '/_setToArray.php';
$stringToArray = require __DIR__ . '/_stringToArray.php';
$values = require __DIR__ . '/values.php';
$mapTag = '[object Map]';
$setTag = '[object Set]';
$symIterator = ($Symbol ? $Symbol['iterator'] : null);
function toArray($value) {
    if (!$value) {
        return [];
    }
    if ($isArrayLike($value)) {
        return ($isString($value) ? $stringToArray($value) : $copyArray($value));
    }
    if ($symIterator && $value[$symIterator]) {
        return $iteratorToArray($value[$symIterator]());
    }
    $tag = $getTag($value);
    $func = ($tag == $mapTag ? $mapToArray : ($tag == $setTag ? $setToArray : $values));
    return $func($value);
}
return 'toArray';
