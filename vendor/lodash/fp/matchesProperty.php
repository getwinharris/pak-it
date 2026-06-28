<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('matchesProperty', require __DIR__ . '/matchesProperty.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
