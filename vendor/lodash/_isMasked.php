<?php
$coreJsData = require __DIR__ . '/_coreJsData.php';
$maskSrcKey = (function() {
        $uid = preg_match('/[^.]+$/', $coreJsData && $coreJsData['keys'] && $coreJsData['keys']['IE_PROTO'] || '');
        return ($uid ? 'Symbol(src)_1.' + $uid : '');
})();
function isMasked($func) {
    return !!$maskSrcKey && (is_array($func) ? (array_key_exists($maskSrcKey, $func) || in_array($maskSrcKey, $func)) : false);
}
return 'isMasked';
