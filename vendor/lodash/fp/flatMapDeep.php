<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('flatMapDeep', require('../flatMapDeep'));

$func.placeholder = require('./placeholder');
return $func;

