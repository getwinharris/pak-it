<?php
$FUNC_ERROR_TEXT = 'Expected a function';
function baseDelay($func, $wait, $args) {
    if (!is_callable($func)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    return setTimeout(function() {
        $func['apply'](null, $args);
}, $wait);
}
return 'baseDelay';
