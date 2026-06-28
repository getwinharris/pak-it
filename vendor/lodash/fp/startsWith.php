<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('startsWith', require __DIR__ . '/startsWith.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
