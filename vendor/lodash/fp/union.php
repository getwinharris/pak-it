<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('union', require('../union'));

$func.placeholder = require('./placeholder');
return $func;

