<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('flow', require __DIR__ . '/flow.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
