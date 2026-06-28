<?php
$castFunction = require __DIR__ . '/_castFunction.php';
$partial = require __DIR__ . '/partial.php';
function wrap($value, $wrapper) {
    return $partial($castFunction($wrapper), $value);
}
return 'wrap';
