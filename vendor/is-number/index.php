<?php
/*!
* is-number <https://github.com/jonschlinkert/is-number>
*
* Copyright (c) 2014-present, Jon Schlinkert.
* Released under the MIT License.
*/


return function($num) {
  if (is_numeric($num)) {
    return $num - $num === 0;
  }
  if (is_string($num) && trim($num) !== '') {
    return is_finite ? is_finite(+$num) : is_finite(+$num);
  }
  return false;
};

