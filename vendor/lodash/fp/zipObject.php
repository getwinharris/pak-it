<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('zipObject', require __DIR__ . '/zipObject.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
