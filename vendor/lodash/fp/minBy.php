<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('minBy', require('../minBy'));

$func.placeholder = require('./placeholder');
return $func;

