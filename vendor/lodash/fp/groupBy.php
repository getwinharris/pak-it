<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('groupBy', require('../groupBy'));

$func.placeholder = require('./placeholder');
return $func;

