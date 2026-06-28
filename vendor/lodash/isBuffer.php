<?php
$root = require __DIR__ . '/_root.php';
$stubFalse = require __DIR__ . '/stubFalse.php';
$freeExports = (is_object(exports) || is_array(exports)) && exports && !exports['nodeType'] && exports;
$freeModule = $freeExports && (is_object(module) || is_array(module)) && module && !module['nodeType'] && module;
$moduleExports = $freeModule && $freeModule['exports'] === $freeExports;
$Buffer = ($moduleExports ? $root['Buffer'] : null);
$nativeIsBuffer = ($Buffer ? $Buffer['isBuffer'] : null);
$isBuffer = $nativeIsBuffer || $stubFalse;
return 'isBuffer';
