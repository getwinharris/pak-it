<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('trimEnd', require __DIR__ . '/trimEnd.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
