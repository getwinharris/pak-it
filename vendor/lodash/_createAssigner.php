<?php
$baseRest = require __DIR__ . '/_baseRest.php';
$isIterateeCall = require __DIR__ . '/_isIterateeCall.php';
function createAssigner($assigner) {
    return $baseRest(function($object, $sources) {
        $index = -1;
        $length = (is_array($sources) ? count($sources) : strlen($sources));
        $customizer = ($length > 1 ? $sources[$length - 1] : null);
        $guard = ($length > 2 ? $sources[2] : null);
        $customizer = ((is_array($assigner) ? count($assigner) : strlen($assigner)) > 3 && is_callable($customizer) ? (static function() { $length--; return $customizer; })() : null);
        if ($guard && $isIterateeCall($sources[0], $sources[1], $guard)) {
            $customizer = ($length < 3 ? null : $customizer);
            $length = 1;
        }
        $object = Object($object);
        while (++$index < $length) {
            $source = $sources[$index];
            if ($source) {
                $assigner($object, $source, $index, $customizer);
            }
        }
        return $object;
});
}
return 'createAssigner';
