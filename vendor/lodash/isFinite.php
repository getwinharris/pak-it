<?php
$root = require __DIR__ . '/_root.php';
$nativeIsFinite = $root['isFinite'];
function isFinite($value) {
    return is_numeric($value) && $nativeIsFinite($value);
}
return 'isFinite';
