<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('method', require('../method'));

$func.placeholder = require('./placeholder');
return $func;

