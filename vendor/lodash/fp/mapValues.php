<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('mapValues', require('../mapValues'));

$func.placeholder = require('./placeholder');
return $func;

