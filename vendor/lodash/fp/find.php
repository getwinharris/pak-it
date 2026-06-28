<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('find', require __DIR__ . '/find.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
