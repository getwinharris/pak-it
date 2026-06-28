<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('intersection', require('../intersection'));

$func.placeholder = require('./placeholder');
return $func;

