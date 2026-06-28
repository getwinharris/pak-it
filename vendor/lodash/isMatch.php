<?php
$baseIsMatch = require __DIR__ . '/_baseIsMatch.php';
$getMatchData = require __DIR__ . '/_getMatchData.php';
function isMatch($object, $source) {
    return $object === $source || $baseIsMatch($object, $source, $getMatchData($source));
}
return 'isMatch';
