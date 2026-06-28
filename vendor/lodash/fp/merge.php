<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('merge', require __DIR__ . '/merge.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
