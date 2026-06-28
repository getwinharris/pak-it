<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('unset', require('../unset'));

$func.placeholder = require('./placeholder');
return $func;

