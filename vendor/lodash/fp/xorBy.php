<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('xorBy', require('../xorBy'));

$func.placeholder = require('./placeholder');
return $func;

