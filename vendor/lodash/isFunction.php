<?php
$baseGetTag = require __DIR__ . '/_baseGetTag.php';
$isObject = require __DIR__ . '/isObject.php';
$asyncTag = '[object AsyncFunction]';
$funcTag = '[object Function]';
$genTag = '[object GeneratorFunction]';
$proxyTag = '[object Proxy]';
function isFunction($value) {
    if (!$isObject($value)) {
        return false;
    }
    $tag = $baseGetTag($value);
    return $tag == $funcTag || $tag == $genTag || $tag == $asyncTag || $tag == $proxyTag;
}
return 'isFunction';
