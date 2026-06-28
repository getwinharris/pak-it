<?php
$LazyWrapper = require __DIR__ . '/_LazyWrapper.php';
$LodashWrapper = require __DIR__ . '/_LodashWrapper.php';
$copyArray = require __DIR__ . '/_copyArray.php';
function wrapperClone($wrapper) {
    if ($wrapper instanceof $LazyWrapper) {
        return $wrapper['clone']();
    }
    $result = new $LodashWrapper($wrapper['__wrapped__'], $wrapper['__chain__']);
    $result['__actions__'] = $copyArray($wrapper['__actions__']);
    $result['__index__'] = $wrapper['__index__'];
    $result['__values__'] = $wrapper['__values__'];
    return $result;
}
return 'wrapperClone';
