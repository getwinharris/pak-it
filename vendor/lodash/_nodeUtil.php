<?php
$freeGlobal = require __DIR__ . '/_freeGlobal.php';
$freeExports = (is_object(exports) || is_array(exports)) && exports && !exports['nodeType'] && exports;
$freeModule = $freeExports && (is_object(module) || is_array(module)) && module && !module['nodeType'] && module;
$moduleExports = $freeModule && $freeModule['exports'] === $freeExports;
$freeProcess = $moduleExports && $freeGlobal['process'];
$nodeUtil = (function() {
        try {
            $types = $freeModule && $freeModule['require'] && $freeModule['require']('util')['types'];
            if ($types) {
                return $types;
            }
            return $freeProcess && $freeProcess['binding'] && $freeProcess['binding']('util');
        } catch (\Throwable $e) {}
})();
return 'nodeUtil';
