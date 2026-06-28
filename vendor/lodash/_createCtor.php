<?php
$baseCreate = require __DIR__ . '/_baseCreate.php';
$isObject = require __DIR__ . '/isObject.php';
function createCtor($Ctor) {
    return function() {
        $args = $arguments;
        switch ((is_array($args) ? count($args) : strlen($args))) {
            case 0:
                return new $Ctor();
            case 1:
                return new $Ctor($args[0]);
            case 2:
                return new $Ctor($args[0], $args[1]);
            case 3:
                return new $Ctor($args[0], $args[1], $args[2]);
            case 4:
                return new $Ctor($args[0], $args[1], $args[2], $args[3]);
            case 5:
                return new $Ctor($args[0], $args[1], $args[2], $args[3], $args[4]);
            case 6:
                return new $Ctor($args[0], $args[1], $args[2], $args[3], $args[4], $args[5]);
            case 7:
                return new $Ctor($args[0], $args[1], $args[2], $args[3], $args[4], $args[5], $args[6]);
        }
        $thisBinding = $baseCreate($Ctor['prototype']);
        $result = $Ctor['apply']($thisBinding, $args);
        return ($isObject($result) ? $result : $thisBinding);
};
}
return 'createCtor';
