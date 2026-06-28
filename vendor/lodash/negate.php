<?php
$FUNC_ERROR_TEXT = 'Expected a function';
function negate($predicate) {
    if (!is_callable($predicate)) {
        throw new TypeError($FUNC_ERROR_TEXT);
    }
    return function() {
        $args = $arguments;
        switch ((is_array($args) ? count($args) : strlen($args))) {
            case 0:
                return !call_user_func($predicate, $this);
            case 1:
                return !call_user_func($predicate, $this, $args[0]);
            case 2:
                return !call_user_func($predicate, $this, $args[0], $args[1]);
            case 3:
                return !call_user_func($predicate, $this, $args[0], $args[1], $args[2]);
        }
        return !$predicate['apply']($this, $args);
};
}
return 'negate';
