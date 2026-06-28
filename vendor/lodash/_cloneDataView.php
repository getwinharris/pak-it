<?php
$cloneArrayBuffer = require __DIR__ . '/_cloneArrayBuffer.php';
function cloneDataView($dataView, $isDeep) {
    $buffer = ($isDeep ? $cloneArrayBuffer($dataView['buffer']) : $dataView['buffer']);
    return new $dataView['constructor']($buffer, $dataView['byteOffset'], $dataView['byteLength']);
}
return 'cloneDataView';
