<?php
$isObject = require __DIR__ . '/isObject.php';
$now = require __DIR__ . '/now.php';
$toNumber = require __DIR__ . '/toNumber.php';
$FUNC_ERROR_TEXT = 'Expected a function';
$nativeMax = max;
$nativeMin = min;
function debounce($func, $wait, $options) {
    $lastArgs = null;
    $lastThis = null;
    $maxWait = null;
    $result = null;
    $timerId = null;
    $lastCallTime = null;
    $lastInvokeTime = 0;
    $leading = false;
    $maxing = false;
    $trailing = true;
    if (!is_callable($func)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    $wait = $toNumber($wait) || 0;
    if ($isObject($options)) {
        $leading = !!$options['leading'];
        $maxing = (is_array($options) ? (array_key_exists('maxWait', $options) || in_array('maxWait', $options)) : false);
        $maxWait = ($maxing ? $nativeMax($toNumber($options['maxWait']) || 0, $wait) : $maxWait);
        $trailing = ((is_array($options) ? (array_key_exists('trailing', $options) || in_array('trailing', $options)) : false) ? !!$options['trailing'] : $trailing);
    }
    function invokeFunc($time) {
        $args = $lastArgs;
        $thisArg = $lastThis;
        $lastArgs = $lastThis = null;
        $lastInvokeTime = $time;
        $result = $func['apply']($thisArg, $args);
        return $result;
    }
    function leadingEdge($time) {
        $lastInvokeTime = $time;
        $timerId = setTimeout($timerExpired, $wait);
        return ($leading ? $invokeFunc($time) : $result);
    }
    function remainingWait($time) {
        $timeSinceLastCall = $time - $lastCallTime;
        $timeSinceLastInvoke = $time - $lastInvokeTime;
        $timeWaiting = $wait - $timeSinceLastCall;
        return ($maxing ? $nativeMin($timeWaiting, $maxWait - $timeSinceLastInvoke) : $timeWaiting);
    }
    function shouldInvoke($time) {
        $timeSinceLastCall = $time - $lastCallTime;
        $timeSinceLastInvoke = $time - $lastInvokeTime;
        return $lastCallTime === null || $timeSinceLastCall >= $wait || $timeSinceLastCall < 0 || $maxing && $timeSinceLastInvoke >= $maxWait;
    }
    function timerExpired() {
        $time = $now();
        if ($shouldInvoke($time)) {
            return $trailingEdge($time);
        }
        $timerId = setTimeout($timerExpired, $remainingWait($time));
    }
    function trailingEdge($time) {
        $timerId = null;
        if ($trailing && $lastArgs) {
            return $invokeFunc($time);
        }
        $lastArgs = $lastThis = null;
        return $result;
    }
    function cancel() {
        if ($timerId !== null) {
            clearTimeout($timerId);
        }
        $lastInvokeTime = 0;
        $lastArgs = $lastCallTime = $lastThis = $timerId = null;
    }
    function flush() {
        return ($timerId === null ? $result : $trailingEdge($now()));
    }
    function debounced() {
        $time = $now();
        $isInvoking = $shouldInvoke($time);
        $lastArgs = $arguments;
        $lastThis = $this;
        $lastCallTime = $time;
        if ($isInvoking) {
            if ($timerId === null) {
                return $leadingEdge($lastCallTime);
            }
            if ($maxing) {
                clearTimeout($timerId);
                $timerId = setTimeout($timerExpired, $wait);
                return $invokeFunc($lastCallTime);
            }
        }
        if ($timerId === null) {
            $timerId = setTimeout($timerExpired, $wait);
        }
        return $result;
    }
    $debounced['cancel'] = $cancel;
    $debounced['flush'] = $flush;
    return $debounced;
}
return 'debounce';
