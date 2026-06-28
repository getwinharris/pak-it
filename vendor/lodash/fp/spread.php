<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('spread', require('../spread'));

$func.placeholder = require('./placeholder');
return $func;

