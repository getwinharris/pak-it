<?php
$arrayEach = require __DIR__ . '/_arrayEach.php';
$arrayPush = require __DIR__ . '/_arrayPush.php';
$baseFunctions = require __DIR__ . '/_baseFunctions.php';
$copyArray = require __DIR__ . '/_copyArray.php';
$isFunction = require __DIR__ . '/isFunction.php';
$isObject = require __DIR__ . '/isObject.php';
$keys = require __DIR__ . '/keys.php';
function mixin($object, $source, $options) {
    $props = $keys($source);
    $methodNames = $baseFunctions($source, $props);
    $chain = !$isObject($options) && (is_array($options) ? (array_key_exists('chain', $options) || in_array('chain', $options)) : false) || !!$options['chain'];
    $isFunc = $isFunction($object);
    $arrayEach($methodNames, function($methodName) {
        $func = $source[$methodName];
        $object[$methodName] = $func;
        if ($isFunc) {
            $object['prototype'][$methodName] = function() {
        $chainAll = $this->__chain__;
        if ($chain || $chainAll) {
            $result = $object($this->__wrapped__);
            $actions = $result['__actions__'] = $copyArray($this->__actions__);
            $actions[] = [
                'func' => $func,
                'args' => $arguments,
                'thisArg' => $object
            ];
            $result['__chain__'] = $chainAll;
            return $result;
        }
        return $func['apply']($object, $arrayPush([$this->value()], $arguments));
};
        }
});
    return $object;
}
return 'mixin';
