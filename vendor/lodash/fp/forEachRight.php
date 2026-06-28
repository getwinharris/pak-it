<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('forEachRight', require('../forEachRight'));

$func.placeholder = require('./placeholder');
return $func;

