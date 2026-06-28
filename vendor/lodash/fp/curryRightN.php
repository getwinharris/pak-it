<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('curryRightN', require('../curryRight'));

$func.placeholder = require('./placeholder');
return $func;

