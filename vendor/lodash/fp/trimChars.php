<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('trimChars', require('../trim'));

$func.placeholder = require('./placeholder');
return $func;

