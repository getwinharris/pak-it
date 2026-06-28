<?php
$root = require __DIR__ . '/_root.php';
$toString = require __DIR__ . '/toString.php';
$reTrimStart = '/^\\s+/';
$nativeParseInt = $root['parseInt'];
function parseInt($string, $radix, $guard) {
    if ($guard || $radix == null) {
        $radix = 0;
    } else if ($radix) {
        $radix = +$radix;
    }
    return $nativeParseInt(str_replace($reTrimStart, '', $toString($string)), $radix || 0);
}
return 'parseInt';
