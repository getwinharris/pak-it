<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$pullAll = require __DIR__ . '/pullAll.php';
$pull = $baseRest($pullAll);
return 'pull';
