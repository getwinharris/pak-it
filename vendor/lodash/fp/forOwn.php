<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('forOwn', require __DIR__ . '/forOwn.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
