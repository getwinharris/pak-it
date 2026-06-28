<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('orderBy', require('../orderBy'));

$func.placeholder = require('./placeholder');
return $func;

