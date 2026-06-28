<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('drop', require('../drop'));

$func.placeholder = require('./placeholder');
return $func;

