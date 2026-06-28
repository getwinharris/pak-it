<?php
$baseToPairs = require __DIR__ . '/_baseToPairs.php';
$getTag = require __DIR__ . '/_getTag.php';
$mapToArray = require __DIR__ . '/_mapToArray.php';
$setToPairs = require __DIR__ . '/_setToPairs.php';
$mapTag = '[object Map]';
$setTag = '[object Set]';
function createToPairs($keysFunc) {
    return function($object) {
        $tag = $getTag($object);
        if ($tag == $mapTag) {
            return $mapToArray($object);
        }
        if ($tag == $setTag) {
            return $setToPairs($object);
        }
        return $baseToPairs($object, $keysFunc($object));
};
}
return 'createToPairs';
