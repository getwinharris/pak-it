<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('countBy', require __DIR__ . '/countBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
