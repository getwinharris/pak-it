<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('wrap', require('../wrap'));

$func.placeholder = require('./placeholder');
return $func;

