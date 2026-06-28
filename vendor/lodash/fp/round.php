<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('round', require('../round'));

$func.placeholder = require('./placeholder');
return $func;

