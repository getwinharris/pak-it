<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('sortedUniq', require('../sortedUniq'), require('./_falseOptions'));

$func.placeholder = require('./placeholder');
return $func;

