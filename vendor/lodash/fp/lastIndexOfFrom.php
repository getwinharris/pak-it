<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('lastIndexOfFrom', require __DIR__ . '/lastIndexOf.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
