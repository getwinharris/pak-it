<?php
$Symbol = require __DIR__ . '/_Symbol.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
$nativeObjectToString = $objectProto['toString'];
$symToStringTag = ($Symbol ? $Symbol['toStringTag'] : null);
function getRawTag($value) {
    $isOwn = call_user_func($hasOwnProperty, $value, $symToStringTag);
    $tag = $value[$symToStringTag];
    try {
        $value[$symToStringTag] = null;
        $unmasked = true;
    } catch (\Throwable $e) {}
    $result = call_user_func($nativeObjectToString, $value);
    if ($unmasked) {
        if ($isOwn) {
            $value[$symToStringTag] = $tag;
        } else {
            (static function() { if (isset($value[$symToStringTag])) { unset($value[$symToStringTag]); return true; } return true; })();
        }
    }
    return $result;
}
return 'getRawTag';
