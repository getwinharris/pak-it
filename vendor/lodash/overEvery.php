<?php
$arrayEvery = require __DIR__ . '/_arrayEvery.php';
$createOver = require __DIR__ . '/_createOver.php';
$overEvery = $createOver($arrayEvery);
return 'overEvery';
