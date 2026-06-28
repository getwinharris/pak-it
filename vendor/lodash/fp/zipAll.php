<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('zipAll', require('../zip'));

$func.placeholder = require('./placeholder');
return $func;

