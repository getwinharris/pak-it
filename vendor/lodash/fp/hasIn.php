<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('hasIn', require('../hasIn'));

$func.placeholder = require('./placeholder');
return $func;

