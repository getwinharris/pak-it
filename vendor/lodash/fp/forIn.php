<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('forIn', require('../forIn'));

$func.placeholder = require('./placeholder');
return $func;

