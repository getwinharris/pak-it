<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('dropRight', require('../dropRight'));

$func.placeholder = require('./placeholder');
return $func;

