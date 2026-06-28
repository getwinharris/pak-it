<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('maxBy', require('../maxBy'));

$func.placeholder = require('./placeholder');
return $func;

