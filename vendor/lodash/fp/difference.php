<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('difference', require __DIR__ . '/difference.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
