<?php
$baseClone = require __DIR__ . '/_baseClone.php';
$baseIteratee = require __DIR__ . '/_baseIteratee.php';
$CLONE_DEEP_FLAG = 1;
function iteratee($func) {
    return $baseIteratee((is_callable($func) ? $func : $baseClone($func, $CLONE_DEEP_FLAG)));
}
return 'iteratee';
