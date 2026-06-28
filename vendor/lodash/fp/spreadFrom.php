<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('spreadFrom', require __DIR__ . '/spread.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
