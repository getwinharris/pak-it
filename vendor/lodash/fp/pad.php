<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('pad', require __DIR__ . '/pad.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
