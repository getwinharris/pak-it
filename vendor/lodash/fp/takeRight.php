<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('takeRight', require('../takeRight'));

$func.placeholder = require('./placeholder');
return $func;

