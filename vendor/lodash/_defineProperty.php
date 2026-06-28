<?php
$getNative = require __DIR__ . '/_getNative.php';
$defineProperty = (function() {
        try {
            $func = $getNative(Object, 'defineProperty');
            $func([], '', []);
            return $func;
        } catch (\Throwable $e) {}
})();
return 'defineProperty';
