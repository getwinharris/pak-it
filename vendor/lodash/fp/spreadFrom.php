<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('spreadFrom', require('../spread'));

$func.placeholder = require('./placeholder');
return $func;

