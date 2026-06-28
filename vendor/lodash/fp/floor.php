<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('floor', require __DIR__ . '/floor.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
