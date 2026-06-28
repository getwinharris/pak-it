<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('bindAll', require('../bindAll'));

$func.placeholder = require('./placeholder');
return $func;

