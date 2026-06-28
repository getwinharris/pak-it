<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('lastIndexOf', require('../lastIndexOf'));

$func.placeholder = require('./placeholder');
return $func;

