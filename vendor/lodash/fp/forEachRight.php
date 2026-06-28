<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('forEachRight', require __DIR__ . '/forEachRight.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
