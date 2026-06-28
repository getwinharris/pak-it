<?php
$baseWrapperValue = require __DIR__ . '/_baseWrapperValue.php';
$getView = require __DIR__ . '/_getView.php';
$isArray = require __DIR__ . '/isArray.php';
$LAZY_FILTER_FLAG = 1;
$LAZY_MAP_FLAG = 2;
$nativeMin = min;
function lazyValue() {
    $array = $this->__wrapped__['value']();
    $dir = $this->__dir__;
    $isArr = $isArray($array);
    $isRight = $dir < 0;
    $arrLength = ($isArr ? (is_array($array) ? count($array) : strlen($array)) : 0);
    $view = $getView(0, $arrLength, $this->__views__);
    $start = $view['start'];
    $end = $view['end'];
    $length = $end - $start;
    $index = ($isRight ? $end : $start - 1);
    $iteratees = $this->__iteratees__;
    $iterLength = (is_array($iteratees) ? count($iteratees) : strlen($iteratees));
    $resIndex = 0;
    $takeCount = $nativeMin($length, $this->__takeCount__);
    if (!$isArr || !$isRight && $arrLength == $length && $takeCount == $length) {
        return $baseWrapperValue($array, $this->__actions__);
    }
    $result = [];
    null /* LabeledStatement */;
    return $result;
}
return 'lazyValue';
