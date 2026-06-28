<?php
$arrayMap = require __DIR__ . '/_arrayMap.php';
$copyArray = require __DIR__ . '/_copyArray.php';
$isArray = require __DIR__ . '/isArray.php';
$isSymbol = require __DIR__ . '/isSymbol.php';
$stringToPath = require __DIR__ . '/_stringToPath.php';
$toKey = require __DIR__ . '/_toKey.php';
$toString = require __DIR__ . '/toString.php';
function toPath($value) {
    if ($isArray($value)) {
        return $arrayMap($value, $toKey);
    }
    return ($isSymbol($value) ? [$value] : $copyArray($stringToPath($toString($value))));
}
return 'toPath';
