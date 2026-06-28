<?php
function baseUnary($func) {
    return function($value) {
        return $func($value);
};
}
return 'baseUnary';
