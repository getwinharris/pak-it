<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('assignInWith', require __DIR__ . '/assignInWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
