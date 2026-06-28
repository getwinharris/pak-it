<?php
$cloneArrayBuffer = require __DIR__ . '/_cloneArrayBuffer.php';
function cloneTypedArray($typedArray, $isDeep) {
    $buffer = ($isDeep ? $cloneArrayBuffer($typedArray['buffer']) : $typedArray['buffer']);
    return new $typedArray['constructor']($buffer, $typedArray['byteOffset'], (is_array($typedArray) ? count($typedArray) : strlen($typedArray)));
}
return 'cloneTypedArray';
