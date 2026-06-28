<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('cloneDeepWith', require('../cloneDeepWith'));

$func.placeholder = require('./placeholder');
return $func;

