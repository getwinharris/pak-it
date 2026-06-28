<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('reject', require __DIR__ . '/reject.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
