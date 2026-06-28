<?php
function tap($value, $interceptor) {
    $interceptor($value);
    return $value;
}
return 'tap';
