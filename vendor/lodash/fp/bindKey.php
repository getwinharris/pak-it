<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('bindKey', require('../bindKey'));

$func.placeholder = require('./placeholder');
return $func;

