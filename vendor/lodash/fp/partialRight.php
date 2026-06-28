<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('partialRight', require('../partialRight'));

$func.placeholder = require('./placeholder');
return $func;

