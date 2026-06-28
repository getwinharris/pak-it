<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('defaultsAll', require('../defaults'));

$func.placeholder = require('./placeholder');
return $func;

