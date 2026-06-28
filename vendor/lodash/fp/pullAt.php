<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('pullAt', require('../pullAt'));

$func.placeholder = require('./placeholder');
return $func;

