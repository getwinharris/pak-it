<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('padStart', require __DIR__ . '/padStart.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
