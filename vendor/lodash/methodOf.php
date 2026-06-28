<?php
$baseInvoke = require __DIR__ . '/_baseInvoke.php';
$baseRest = require __DIR__ . '/_baseRest.php';
$methodOf = $baseRest(function($object, $args) {
        return function($path) {
        return $baseInvoke($object, $path, $args);
};
});
return 'methodOf';
