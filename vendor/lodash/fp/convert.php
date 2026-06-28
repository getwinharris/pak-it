<?php
$baseConvert = require __DIR__ . '/_baseConvert.php';
$util = require __DIR__ . '/_util.php';
function convert($name, $func, $options) {
    return $baseConvert($util, $name, $func, $options);
}
return 'convert';
