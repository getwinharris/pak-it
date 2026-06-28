<?php
$HOT_COUNT = 800;
$HOT_SPAN = 16;
$nativeNow = Date['now'];
function shortOut($func) {
    $count = 0;
    $lastCalled = 0;
    return function() {
        $stamp = $nativeNow();
        $remaining = $HOT_SPAN - $stamp - $lastCalled;
        $lastCalled = $stamp;
        if ($remaining > 0) {
            if (++$count >= $HOT_COUNT) {
                return $arguments[0];
            }
        } else {
            $count = 0;
        }
        return $func['apply'](null, $arguments);
};
}
return 'shortOut';
