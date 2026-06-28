<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sortedLastIndexOf', require('../sortedLastIndexOf'));

$func.placeholder = require('./placeholder');
return $func;

