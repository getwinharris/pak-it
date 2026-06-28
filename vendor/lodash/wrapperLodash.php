<?php
$LazyWrapper = require __DIR__ . '/_LazyWrapper.php';
$LodashWrapper = require __DIR__ . '/_LodashWrapper.php';
$baseLodash = require __DIR__ . '/_baseLodash.php';
$isArray = require __DIR__ . '/isArray.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$wrapperClone = require __DIR__ . '/_wrapperClone.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
function lodash($value) {
    if ($isObjectLike($value) && !$isArray($value) && !$value instanceof $LazyWrapper) {
        if ($value instanceof $LodashWrapper) {
            return $value;
        }
        if (call_user_func($hasOwnProperty, $value, '__wrapped__')) {
            return $wrapperClone($value);
        }
    }
    return new $LodashWrapper($value);
}
$lodash['prototype'] = $baseLodash['prototype'];
$lodash['prototype']['constructor'] = $lodash;
return 'lodash';
