<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('slice', require('../slice'));

$func.placeholder = require('./placeholder');
return $func;

