<?php
$createFind = require __DIR__ . '/_createFind.php';
$findIndex = require __DIR__ . '/findIndex.php';
$find = $createFind($findIndex);
return 'find';
