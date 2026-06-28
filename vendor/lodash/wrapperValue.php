<?php
$baseWrapperValue = require __DIR__ . '/_baseWrapperValue.php';
function wrapperValue() {
    return $baseWrapperValue($this->__wrapped__, $this->__actions__);
}
return 'wrapperValue';
