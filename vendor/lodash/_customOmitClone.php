<?php
$isPlainObject = require __DIR__ . '/isPlainObject.php';
function customOmitClone($value) {
    return ($isPlainObject($value) ? null : $value);
}
return 'customOmitClone';
