<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('before', require __DIR__ . '/before.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
