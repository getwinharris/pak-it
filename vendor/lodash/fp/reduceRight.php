<?php
$convert = require __DIR__ . '/convert';
    $func = $convert('reduceRight', require('../reduceRight'));

$func.placeholder = require('./placeholder');
return $func;

