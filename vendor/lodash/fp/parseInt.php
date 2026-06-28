<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('parseInt', require('../parseInt'));

$func.placeholder = require('./placeholder');
return $func;

