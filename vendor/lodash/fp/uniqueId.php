<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('uniqueId', require __DIR__ . '/uniqueId.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
