<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('template', require __DIR__ . '/template.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
