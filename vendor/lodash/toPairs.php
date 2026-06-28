<?php
$createToPairs = require __DIR__ . '/_createToPairs.php';
$keys = require __DIR__ . '/keys.php';
$toPairs = $createToPairs($keys);
return 'toPairs';
