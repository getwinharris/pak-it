<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('partialRight', require __DIR__ . '/partialRight.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
