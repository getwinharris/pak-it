<?php
function thru($value, $interceptor) {
    return $interceptor($value);
}
return 'thru';
