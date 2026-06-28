<?php
$LazyWrapper = require __DIR__ . '/_LazyWrapper.php';
$arrayPush = require __DIR__ . '/_arrayPush.php';
$arrayReduce = require __DIR__ . '/_arrayReduce.php';
function baseWrapperValue($value, $actions) {
    $result = $value;
    if ($result instanceof $LazyWrapper) {
        $result = $result['value']();
    }
    return $arrayReduce($actions, function($result, $action) {
        return $action['func']['apply']($action['thisArg'], $arrayPush([$result], $action['args']));
}, $result);
}
return 'baseWrapperValue';
