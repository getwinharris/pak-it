<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('without', require('../without'));

$func.placeholder = require('./placeholder');
return $func;

