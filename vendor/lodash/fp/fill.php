<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('fill', require __DIR__ . '/fill.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
