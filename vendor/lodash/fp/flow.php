<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('flow', require('../flow'));

$func.placeholder = require('./placeholder');
return $func;

