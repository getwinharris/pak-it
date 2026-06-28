<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('trim', require('../trim'));

$func.placeholder = require('./placeholder');
return $func;

