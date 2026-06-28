<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('findKey', require('../findKey'));

$func.placeholder = require('./placeholder');
return $func;

