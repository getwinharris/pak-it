<?php
$arrayEach = require __DIR__ . '/_arrayEach.php';
$baseAssignValue = require __DIR__ . '/_baseAssignValue.php';
$bind = require __DIR__ . '/bind.php';
$flatRest = require __DIR__ . '/_flatRest.php';
$toKey = require __DIR__ . '/_toKey.php';
$bindAll = $flatRest(function($object, $methodNames) {
        $arrayEach($methodNames, function($key) {
        $key = $toKey($key);
        $baseAssignValue($object, $key, $bind($object[$key], $object));
});
        return $object;
});
return 'bindAll';
