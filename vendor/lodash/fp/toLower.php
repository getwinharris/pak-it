<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('toLower', require('../toLower'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

