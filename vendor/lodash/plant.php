<?php
$baseLodash = require __DIR__ . '/_baseLodash.php';
$wrapperClone = require __DIR__ . '/_wrapperClone.php';
function wrapperPlant($value) {
    $result = null;
    $parent = $this;
    while ($parent instanceof $baseLodash) {
        $clone = $wrapperClone($parent);
        $clone['__index__'] = 0;
        $clone['__values__'] = null;
        if ($result) {
            $previous['__wrapped__'] = $clone;
        } else {
            $result = $clone;
        }
        $previous = $clone;
        $parent = $parent['__wrapped__'];
    }
    $previous['__wrapped__'] = $value;
    return $result;
}
return 'wrapperPlant';
