<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('repeat', require('../repeat'));

$func.placeholder = require('./placeholder');
return $func;

