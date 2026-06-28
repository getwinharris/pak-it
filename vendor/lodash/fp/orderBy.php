<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('orderBy', require __DIR__ . '/orderBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
