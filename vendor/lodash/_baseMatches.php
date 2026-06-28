<?php
$baseIsMatch = require __DIR__ . '/_baseIsMatch.php';
$getMatchData = require __DIR__ . '/_getMatchData.php';
$matchesStrictComparable = require __DIR__ . '/_matchesStrictComparable.php';
function baseMatches($source) {
    $matchData = $getMatchData($source);
    if ((is_array($matchData) ? count($matchData) : strlen($matchData)) == 1 && $matchData[0][2]) {
        return $matchesStrictComparable($matchData[0][0], $matchData[0][1]);
    }
    return function($object) {
        return $object === $source || $baseIsMatch($object, $source, $matchData);
};
}
return 'baseMatches';
