<?php
$Uint8Array = require __DIR__ . '/_Uint8Array.php';
function cloneArrayBuffer($arrayBuffer) {
    $result = new $arrayBuffer['constructor']($arrayBuffer['byteLength']);
    new $Uint8Array($result)['set'](new $Uint8Array($arrayBuffer));
    return $result;
}
return 'cloneArrayBuffer';
