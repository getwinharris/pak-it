<?php
$apply = require __DIR__ . '/_apply.php';
$nativeMax = max;
function overRest($func, $start, $transform) {
    $start = $nativeMax(($start === null ? (is_array($func) ? count($func) : strlen($func)) - 1 : $start), 0);
    return function() {
        $args = $arguments;
        $index = -1;
        $length = $nativeMax((is_array($args) ? count($args) : strlen($args)) - $start, 0);
        $array = array_fill(0, $length, null);
        while (++$index < $length) {
            $array[$index] = $args[$start + $index];
        }
        $index = -1;
        $otherArgs = array_fill(0, $start + 1, null);
        while (++$index < $start) {
            $otherArgs[$index] = $args[$index];
        }
        $otherArgs[$start] = $transform($array);
        return $apply($func, $this, $otherArgs);
};
}
return 'overRest';
