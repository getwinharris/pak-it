<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('over', require __DIR__ . '/over.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
