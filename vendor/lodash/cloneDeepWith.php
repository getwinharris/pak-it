<?php
$baseClone = require __DIR__ . '/_baseClone.php';
$CLONE_DEEP_FLAG = 1;
$CLONE_SYMBOLS_FLAG = 4;
function cloneDeepWith($value, $customizer) {
    $customizer = (is_callable($customizer) ? $customizer : null);
    return $baseClone($value, $CLONE_DEEP_FLAG | $CLONE_SYMBOLS_FLAG, $customizer);
}
return 'cloneDeepWith';
