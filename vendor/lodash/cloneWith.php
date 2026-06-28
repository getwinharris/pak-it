<?php
$baseClone = require __DIR__ . '/_baseClone.php';
$CLONE_SYMBOLS_FLAG = 4;
function cloneWith($value, $customizer) {
    $customizer = (is_callable($customizer) ? $customizer : null);
    return $baseClone($value, $CLONE_SYMBOLS_FLAG, $customizer);
}
return 'cloneWith';
