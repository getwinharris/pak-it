<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('forInRight', require('../forInRight'));

$func.placeholder = require('./placeholder');
return $func;

