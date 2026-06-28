<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('functionsIn', require __DIR__ . '/functionsIn.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
