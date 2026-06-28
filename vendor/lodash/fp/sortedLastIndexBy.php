<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sortedLastIndexBy', require('../sortedLastIndexBy'));

$func.placeholder = require('./placeholder');
return $func;

