<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('findLastKey', require('../findLastKey'));

$func.placeholder = require('./placeholder');
return $func;

