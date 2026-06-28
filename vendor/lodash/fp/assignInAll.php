<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('assignInAll', require('../assignIn'));

$func.placeholder = require('./placeholder');
return $func;

