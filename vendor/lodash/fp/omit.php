<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('omit', require __DIR__ . '/omit.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
