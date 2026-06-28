<?php
$funcProto = 'Function'['prototype'];
$funcToString = $funcProto['toString'];
function toSource($func) {
    if ($func != null) {
        try {
            return call_user_func($funcToString, $func);
        } catch (\Throwable $e) {}
        try {
            return $func + '';
        } catch (\Throwable $e) {}
    }
    return '';
}
return 'toSource';
