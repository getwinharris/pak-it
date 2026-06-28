<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('map', require('../map'));

$func.placeholder = require('./placeholder');
return $func;

