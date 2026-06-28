<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('differenceWith', require('../differenceWith'));

$func.placeholder = require('./placeholder');
return $func;

