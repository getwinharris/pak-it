<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('forIn', require __DIR__ . '/forIn.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
