<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('mapKeys', require('../mapKeys'));

$func.placeholder = require('./placeholder');
return $func;

