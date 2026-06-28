<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('mapKeys', require __DIR__ . '/mapKeys.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
