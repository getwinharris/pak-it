<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('subtract', require('../subtract'));

$func.placeholder = require('./placeholder');
return $func;

