<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('rest', require __DIR__ . '/rest.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
