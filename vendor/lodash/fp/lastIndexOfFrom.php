<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('lastIndexOfFrom', require('../lastIndexOf'));

$func.placeholder = require('./placeholder');
return $func;

