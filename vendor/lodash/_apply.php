<?php
function apply($func, $thisArg, $args) {
    switch ((is_array($args) ? count($args) : strlen($args))) {
        case 0:
            return call_user_func($func, $thisArg);
        case 1:
            return call_user_func($func, $thisArg, $args[0]);
        case 2:
            return call_user_func($func, $thisArg, $args[0], $args[1]);
        case 3:
            return call_user_func($func, $thisArg, $args[0], $args[1], $args[2]);
    }
    return $func['apply']($thisArg, $args);
}
return 'apply';
