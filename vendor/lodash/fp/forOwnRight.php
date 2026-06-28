<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('forOwnRight', require('../forOwnRight'));

$func.placeholder = require('./placeholder');
return $func;

