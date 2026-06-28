<?php
$isArray = require __DIR__ . '/isArray.php';
$isKey = require __DIR__ . '/_isKey.php';
$stringToPath = require __DIR__ . '/_stringToPath.php';
$toString = require __DIR__ . '/toString.php';
function castPath($value, $object) {
    if ($isArray($value)) {
        return $value;
    }
    return ($isKey($value, $object) ? [$value] : $stringToPath($toString($value)));
}
return 'castPath';
