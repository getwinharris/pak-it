<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('takeRightWhile', require('../takeRightWhile'));

$func.placeholder = require('./placeholder');
return $func;

