<?php
$baseClone = require __DIR__ . '/_baseClone.php';
$baseMatches = require __DIR__ . '/_baseMatches.php';
$CLONE_DEEP_FLAG = 1;
function matches($source) {
    return $baseMatches($baseClone($source, $CLONE_DEEP_FLAG));
}
return 'matches';
