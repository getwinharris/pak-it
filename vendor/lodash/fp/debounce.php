<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('debounce', require('../debounce'));

$func.placeholder = require('./placeholder');
return $func;

