<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('assignIn', require __DIR__ . '/assignIn.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
