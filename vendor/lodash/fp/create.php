<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('create', require __DIR__ . '/create.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
