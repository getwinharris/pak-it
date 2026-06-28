<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isMatch', require __DIR__ . '/isMatch.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
