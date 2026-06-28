<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('hasIn', require __DIR__ . '/hasIn.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
