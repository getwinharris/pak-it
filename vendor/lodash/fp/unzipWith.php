<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('unzipWith', require __DIR__ . '/unzipWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
