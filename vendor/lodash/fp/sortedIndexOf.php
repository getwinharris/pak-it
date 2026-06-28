<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sortedIndexOf', require('../sortedIndexOf'));

$func.placeholder = require('./placeholder');
return $func;

