<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('xorWith', require('../xorWith'));

$func.placeholder = require('./placeholder');
return $func;

