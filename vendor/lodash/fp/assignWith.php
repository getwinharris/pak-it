<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('assignWith', require __DIR__ . '/assignWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
