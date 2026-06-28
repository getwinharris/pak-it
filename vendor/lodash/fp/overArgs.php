<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('overArgs', require __DIR__ . '/overArgs.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
