<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('pull', require('../pull'));

$func.placeholder = require('./placeholder');
return $func;

