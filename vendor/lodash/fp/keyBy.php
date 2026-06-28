<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('keyBy', require('../keyBy'));

$func.placeholder = require('./placeholder');
return $func;

