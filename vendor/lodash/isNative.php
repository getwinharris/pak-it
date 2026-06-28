<?php
$baseIsNative = require __DIR__ . '/_baseIsNative.php';
$isMaskable = require __DIR__ . '/_isMaskable.php';
$CORE_ERROR_TEXT = 'Unsupported core-js use. Try https://npms.io/search?q=ponyfill.';
function isNative($value) {
    if ($isMaskable($value)) {
        throw new Error($CORE_ERROR_TEXT);
    }
    return $baseIsNative($value);
}
return 'isNative';
