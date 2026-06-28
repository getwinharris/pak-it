<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('constant', require __DIR__ . '/constant.php', require __DIR__ . '/_falseOptions.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
