<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('includes', require('../includes'));

$func.placeholder = require('./placeholder');
return $func;

