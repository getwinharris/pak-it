<?php
$LazyWrapper = require __DIR__ . '/_LazyWrapper.php';
function lazyReverse() {
    if ($this->__filtered__) {
        $result = new $LazyWrapper($this);
        $result['__dir__'] = -1;
        $result['__filtered__'] = true;
    } else {
        $result = $this->clone();
        $result['__dir__'] *= -1;
    }
    return $result;
}
return 'lazyReverse';
