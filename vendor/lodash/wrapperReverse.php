<?php
$LazyWrapper = require __DIR__ . '/_LazyWrapper.php';
$LodashWrapper = require __DIR__ . '/_LodashWrapper.php';
$reverse = require __DIR__ . '/reverse.php';
$thru = require __DIR__ . '/thru.php';
function wrapperReverse() {
    $value = $this->__wrapped__;
    if ($value instanceof $LazyWrapper) {
        $wrapped = $value;
        if ((is_array($this->__actions__) ? count($this->__actions__) : strlen($this->__actions__))) {
            $wrapped = new $LazyWrapper($this);
        }
        $wrapped = array_reverse($wrapped);
        $wrapped['__actions__'][] = [
            'func' => $thru,
            'args' => [$reverse],
            'thisArg' => null
        ];
        return new $LodashWrapper($wrapped, $this->__chain__);
    }
    return $this->thru($reverse);
}
return 'wrapperReverse';
