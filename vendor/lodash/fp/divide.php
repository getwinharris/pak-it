<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('divide', require('../divide'));

$func.placeholder = require('./placeholder');
return $func;

