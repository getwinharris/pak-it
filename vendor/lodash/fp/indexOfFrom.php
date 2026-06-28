<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('indexOfFrom', require('../indexOf'));

$func.placeholder = require('./placeholder');
return $func;

