<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('chunk', require('../chunk'));

$func.placeholder = require('./placeholder');
return $func;

