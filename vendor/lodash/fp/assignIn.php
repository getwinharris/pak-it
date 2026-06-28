<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('assignIn', require('../assignIn'));

$func.placeholder = require('./placeholder');
return $func;

