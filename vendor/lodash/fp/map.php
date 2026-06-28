<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('map', require __DIR__ . '/map.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
