<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('trimCharsStart', require __DIR__ . '/trimStart.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
