<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('pullAll', require('../pullAll'));

$func.placeholder = require('./placeholder');
return $func;

