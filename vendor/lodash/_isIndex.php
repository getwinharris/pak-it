<?php
$MAX_SAFE_INTEGER = 9007199254740991;
$reIsUint = '/^(?:0|[1-9]\\d*)$/';
function isIndex($value, $length) {
    $type = $value;
    $length = ($length == null ? $MAX_SAFE_INTEGER : $length);
    return !!$length && $type == 'number' || $type != 'symbol' && preg_match($value, $reIsUint) && $value > -1 && $value % 1 == 0 && $value < $length;
}
return 'isIndex';
