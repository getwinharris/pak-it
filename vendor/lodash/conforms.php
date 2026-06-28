<?php
$baseClone = require __DIR__ . '/_baseClone.php';
$baseConforms = require __DIR__ . '/_baseConforms.php';
$CLONE_DEEP_FLAG = 1;
function conforms($source) {
    return $baseConforms($baseClone($source, $CLONE_DEEP_FLAG));
}
return 'conforms';
