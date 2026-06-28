<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sortedIndexBy', require('../sortedIndexBy'));

$func.placeholder = require('./placeholder');
return $func;

