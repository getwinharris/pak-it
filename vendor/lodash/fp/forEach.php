<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('forEach', require('../forEach'));

$func.placeholder = require('./placeholder');
return $func;

