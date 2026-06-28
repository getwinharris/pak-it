<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('concat', require('../concat'));

$func.placeholder = require('./placeholder');
return $func;

