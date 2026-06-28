<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('defaultsDeepAll', require('../defaultsDeep'));

$func.placeholder = require('./placeholder');
return $func;

