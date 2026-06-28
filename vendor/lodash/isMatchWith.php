<?php
$baseIsMatch = require __DIR__ . '/_baseIsMatch.php';
$getMatchData = require __DIR__ . '/_getMatchData.php';
function isMatchWith($object, $source, $customizer) {
    $customizer = (is_callable($customizer) ? $customizer : null);
    return $baseIsMatch($object, $source, $getMatchData($source), $customizer);
}
return 'isMatchWith';
