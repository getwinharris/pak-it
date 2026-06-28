<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('updateWith', require __DIR__ . '/updateWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
