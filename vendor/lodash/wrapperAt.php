<?php
$LazyWrapper = require __DIR__ . '/_LazyWrapper.php';
$LodashWrapper = require __DIR__ . '/_LodashWrapper.php';
$baseAt = require __DIR__ . '/_baseAt.php';
$flatRest = require __DIR__ . '/_flatRest.php';
$isIndex = require __DIR__ . '/_isIndex.php';
$thru = require __DIR__ . '/thru.php';
$wrapperAt = $flatRest(function($paths) {
        $length = (is_array($paths) ? count($paths) : strlen($paths));
        $start = ($length ? $paths[0] : 0);
        $value = $this->__wrapped__;
        $interceptor = function($object) {
        return $baseAt($object, $paths);
};
        if ($length > 1 || (is_array($this->__actions__) ? count($this->__actions__) : strlen($this->__actions__)) || !$value instanceof $LazyWrapper || !$isIndex($start)) {
            return $this->thru($interceptor);
        }
        $value = array_slice($start, +$start + ($length ? 1 : 0), $value);
        $value['__actions__'][] = [
            'func' => $thru,
            'args' => [$interceptor],
            'thisArg' => null
        ];
        return new $LodashWrapper($value, $this->__chain__)['thru'](function($array) {
        if ($length && !(is_array($array) ? count($array) : strlen($array))) {
            $array[] = null;
        }
        return $array;
});
});
return 'wrapperAt';
