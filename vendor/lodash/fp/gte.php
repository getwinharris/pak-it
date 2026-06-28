<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('gte', require __DIR__ . '/gte.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
