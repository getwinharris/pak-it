<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('differenceBy', require('../differenceBy'));

$func.placeholder = require('./placeholder');
return $func;

