<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('setWith', require __DIR__ . '/setWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
