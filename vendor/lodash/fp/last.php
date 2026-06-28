<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('last', require __DIR__ . '/last.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
