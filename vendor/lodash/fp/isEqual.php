<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isEqual', require __DIR__ . '/isEqual.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
