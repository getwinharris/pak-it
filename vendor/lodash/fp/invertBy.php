<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('invertBy', require __DIR__ . '/invertBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
