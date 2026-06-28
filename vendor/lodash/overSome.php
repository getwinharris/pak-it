<?php
$arraySome = require __DIR__ . '/_arraySome.php';
$createOver = require __DIR__ . '/_createOver.php';
$overSome = $createOver($arraySome);
return 'overSome';
