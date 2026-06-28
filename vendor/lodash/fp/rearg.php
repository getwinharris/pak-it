<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('rearg', require('../rearg'));

$func.placeholder = require('./placeholder');
return $func;

