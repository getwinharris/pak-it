<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('defaultsDeep', require('../defaultsDeep'));

$func.placeholder = require('./placeholder');
return $func;

