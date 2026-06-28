<?php
$LazyWrapper = require __DIR__ . '/_LazyWrapper.php';
$copyArray = require __DIR__ . '/_copyArray.php';
function lazyClone() {
    $result = new $LazyWrapper($this->__wrapped__);
    $result['__actions__'] = $copyArray($this->__actions__);
    $result['__dir__'] = $this->__dir__;
    $result['__filtered__'] = $this->__filtered__;
    $result['__iteratees__'] = $copyArray($this->__iteratees__);
    $result['__takeCount__'] = $this->__takeCount__;
    $result['__views__'] = $copyArray($this->__views__);
    return $result;
}
return 'lazyClone';
