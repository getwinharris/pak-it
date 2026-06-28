<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('overSome', require('../overSome'));

$func.placeholder = require('./placeholder');
return $func;

