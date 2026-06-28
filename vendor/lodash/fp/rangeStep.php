<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('rangeStep', require __DIR__ . '/range.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
