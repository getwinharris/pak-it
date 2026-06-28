<?php
$apply = require __DIR__ . '/_apply.php';
$arrayPush = require __DIR__ . '/_arrayPush.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$castSlice = require __DIR__ . '/_castSlice.php';
$toInteger = require __DIR__ . '/toInteger.php';
$FUNC_ERROR_TEXT = 'Expected a function';
$nativeMax = max;
function spread($func, $start) {
    if (!is_callable($func)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    $start = ($start == null ? 0 : $nativeMax($toInteger($start), 0));
    return $baseRest(function($args) {
        $array = $args[$start];
        $otherArgs = $castSlice($args, 0, $start);
        if ($array) {
            $arrayPush($otherArgs, $array);
        }
        return $apply($func, $this, $otherArgs);
});
}
return 'spread';
