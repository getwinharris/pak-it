<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('assignAll', require('../assign'));

$func.placeholder = require('./placeholder');
return $func;

