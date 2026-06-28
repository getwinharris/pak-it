<?php
$createToPairs = require __DIR__ . '/_createToPairs.php';
$keysIn = require __DIR__ . '/keysIn.php';
$toPairsIn = $createToPairs($keysIn);
return 'toPairsIn';
