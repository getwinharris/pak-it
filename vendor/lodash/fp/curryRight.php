<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('curryRight', require('../curryRight'));

$func.placeholder = require('./placeholder');
return $func;

