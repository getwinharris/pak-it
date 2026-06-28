<?php
function _constant($value) {
    return function() {
        return $value;
};
}
return '_constant';
