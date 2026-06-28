<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('matchesProperty', require('../matchesProperty'));

$func.placeholder = require('./placeholder');
return $func;

