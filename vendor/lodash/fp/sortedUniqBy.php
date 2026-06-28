<?php
$convert = require __DIR__ . '/convert.php';
$func = $convert('sortedUniqBy', require __DIR__ . '/sortedUniqBy.php');
$func['placeholder'] = require __DIR__ . '/placeholder.php';
return 'func';
