<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('truncate', require __DIR__ . '/truncate.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
