<?php
$root = require __DIR__ . '/_root.php';
$freeExports = (is_object(exports) || is_array(exports)) && exports && !exports['nodeType'] && exports;
$freeModule = $freeExports && (is_object(module) || is_array(module)) && module && !module['nodeType'] && module;
$moduleExports = $freeModule && $freeModule['exports'] === $freeExports;
$Buffer = ($moduleExports ? $root['Buffer'] : null);
$allocUnsafe = ($Buffer ? $Buffer['allocUnsafe'] : null);
function cloneBuffer($buffer, $isDeep) {
    if ($isDeep) {
        return array_slice($buffer);
    }
    $length = (is_array($buffer) ? count($buffer) : strlen($buffer));
    $result = ($allocUnsafe ? $allocUnsafe($length) : new $buffer['constructor']($length));
    $buffer['copy']($result);
    return $result;
}
return 'cloneBuffer';
