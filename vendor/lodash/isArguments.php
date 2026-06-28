<?php
$baseIsArguments = require __DIR__ . '/_baseIsArguments.php';
$isObjectLike = require __DIR__ . '/isObjectLike.php';
$objectProto = Object['prototype'];
$hasOwnProperty = $objectProto['hasOwnProperty'];
$propertyIsEnumerable = $objectProto['propertyIsEnumerable'];
$isArguments = ($baseIsArguments((function() {
        return $arguments;
})()) ? $baseIsArguments : function($value) {
        return $isObjectLike($value) && call_user_func($hasOwnProperty, $value, 'callee') && !call_user_func($propertyIsEnumerable, $value, 'callee');
});
return 'isArguments';
