<?php
$debounce = require __DIR__ . '/debounce.php';
$isObject = require __DIR__ . '/isObject.php';
$FUNC_ERROR_TEXT = 'Expected a function';
function throttle($func, $wait, $options) {
    $leading = true;
    $trailing = true;
    if (!is_callable($func)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    if ($isObject($options)) {
        $leading = ((is_array($options) ? (array_key_exists('leading', $options) || in_array('leading', $options)) : false) ? !!$options['leading'] : $leading);
        $trailing = ((is_array($options) ? (array_key_exists('trailing', $options) || in_array('trailing', $options)) : false) ? !!$options['trailing'] : $trailing);
    }
    return $debounce($func, $wait, [
        'leading' => $leading,
        'maxWait' => $wait,
        'trailing' => $trailing
    ]);
}
return 'throttle';
