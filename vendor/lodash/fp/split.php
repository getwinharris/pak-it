<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('split', require('../split'));

$func.placeholder = require('./placeholder');
return $func;

