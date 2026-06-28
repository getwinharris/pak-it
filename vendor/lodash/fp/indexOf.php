<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('indexOf', require('../indexOf'));

$func.placeholder = require('./placeholder');
return $func;

