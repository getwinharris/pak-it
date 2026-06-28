<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('dropRightWhile', require('../dropRightWhile'));

$func.placeholder = require('./placeholder');
return $func;

