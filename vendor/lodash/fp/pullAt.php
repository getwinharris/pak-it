<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('pullAt', require __DIR__ . '/pullAt.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
