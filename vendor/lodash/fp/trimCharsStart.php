<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('trimCharsStart', require('../trimStart'));

$func.placeholder = require('./placeholder');
return $func;

