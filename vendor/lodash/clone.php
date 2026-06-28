<?php
$baseClone = require __DIR__ . '/_baseClone.php';
$CLONE_SYMBOLS_FLAG = 4;
function _clone($value) {
    return $baseClone($value, $CLONE_SYMBOLS_FLAG);
}
return '_clone';
