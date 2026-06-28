<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('flowRight', require('../flowRight'));

$func.placeholder = require('./placeholder');
return $func;

