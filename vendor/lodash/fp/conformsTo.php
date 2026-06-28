<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('conformsTo', require __DIR__ . '/conformsTo.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
