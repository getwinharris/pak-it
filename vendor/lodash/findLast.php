<?php
$createFind = require __DIR__ . '/_createFind.php';
$findLastIndex = require __DIR__ . '/findLastIndex.php';
$findLast = $createFind($findLastIndex);
return 'findLast';
