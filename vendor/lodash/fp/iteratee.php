<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('iteratee', require('../iteratee'));

$func.placeholder = require('./placeholder');
return $func;

