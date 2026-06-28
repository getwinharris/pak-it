<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('update', require __DIR__ . '/update.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
