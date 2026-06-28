<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('isArguments', require __DIR__ . '/isArguments.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
