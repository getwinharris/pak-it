<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('intersectionBy', require('../intersectionBy'));

$func.placeholder = require('./placeholder');
return $func;

