<?php
$constant = require __DIR__ . '/constant.php';
$defineProperty = require __DIR__ . '/_defineProperty.php';
$identity = require __DIR__ . '/identity.php';
$baseSetToString = (!$defineProperty ? $identity : function($func, $string) {
        return $defineProperty($func, 'toString', [
            'configurable' => true,
            'enumerable' => false,
            'value' => $constant($string),
            'writable' => true
        ]);
});
return 'baseSetToString';
