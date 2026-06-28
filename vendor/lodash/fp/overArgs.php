<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('overArgs', require('../overArgs'));

$func.placeholder = require('./placeholder');
return $func;

