<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('every', require __DIR__ . '/every.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
