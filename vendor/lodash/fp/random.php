<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('random', require('../random'));

$func.placeholder = require('./placeholder');
return $func;

