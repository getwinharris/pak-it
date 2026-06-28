<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('mapValues', require __DIR__ . '/mapValues.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
