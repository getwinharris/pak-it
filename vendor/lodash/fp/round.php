<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('round', require __DIR__ . '/round.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
