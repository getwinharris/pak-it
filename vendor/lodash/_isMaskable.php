<?php
$coreJsData = require __DIR__ . '/_coreJsData.php';
$isFunction = require __DIR__ . '/isFunction.php';
$stubFalse = require __DIR__ . '/stubFalse.php';
$isMaskable = ($coreJsData ? $isFunction : $stubFalse);
return 'isMaskable';
