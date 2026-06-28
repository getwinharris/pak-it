<?php
$arrayPush = require __DIR__ . '/_arrayPush.php';
$baseFlatten = require __DIR__ . '/_baseFlatten.php';
$copyArray = require __DIR__ . '/_copyArray.php';
$isArray = require __DIR__ . '/isArray.php';
function concat() {
    $length = (is_array($arguments) ? count($arguments) : strlen($arguments));
    if (!$length) {
        return [];
    }
    $args = array_fill(0, $length - 1, null);
    $array = $arguments[0];
    $index = $length;
    while ($index--) {
        $args[$index - 1] = $arguments[$index];
    }
    return $arrayPush(($isArray($array) ? $copyArray($array) : [$array]), $baseFlatten($args, 1));
}
return 'concat';
