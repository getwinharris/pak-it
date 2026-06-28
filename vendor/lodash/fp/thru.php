<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('thru', require('../thru'));

$func.placeholder = require('./placeholder');
return $func;

