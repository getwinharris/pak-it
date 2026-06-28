<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('inRange', require('../inRange'));

$func.placeholder = require('./placeholder');
return $func;

