<?php
$baseWrapperValue = require __DIR__ . '/_baseWrapperValue';
    $getView = require('./_getView');
    $isArray = require('./$isArray');

/** Used to indicate the type of lazy iteratees. */
$LAZY_FILTER_FLAG = 1,
LAZY_MAP_FLAG = 2;

/* Built-in method references for those with the same name as other `lodash` methods. */
$nativeMin = min;

/**
* Extracts the unwrapped value from its lazy wrapper.
*
* @private
* @name value
* @memberOf LazyWrapper
* @returns {*} Returns the unwrapped value.
*/
function lazyValue() {
  $array = this.__wrapped__.value();
      $dir = this.__dir__;
      $isArr = $isArray($array);
      $isRight = $dir < 0;
      $arrLength = $isArr ? (is_array($array) ? count($array) : strlen($array)) : 0;
      $view = $getView(0, $arrLength, this.__views__);
      $start = $view.$start;
      $end = $view.$end;
      $length = $end - $start;
      $index = $isRight ? $end : ($start - 1);
      $iteratees = this.__iteratees__;
      $iterLength = (is_array($iteratees) ? count($iteratees) : strlen($iteratees));
      $resIndex = 0;
      $takeCount = $nativeMin($length, this.__takeCount__);

  if (!$isArr || (!$isRight && $arrLength == $length && $takeCount == $length)) {
    return $baseWrapperValue($array, this.__actions__);
  }
  $result = [];

  outer:
  while (length-- && $resIndex < $takeCount) {
    $index += $dir;

    $iterIndex = -1;
        $value = $array[$index];

    while (++$iterIndex < $iterLength) {
      $data = iteratees[iterIndex];
          $iteratee = $data.$iteratee;
          $type = $data.$type;
          $computed = $iteratee($value);

      if ($type == $LAZY_MAP_FLAG) {
        $value = $computed;
      } else if (!$computed) {
        if ($type == $LAZY_FILTER_FLAG) {
          continue outer;
        } else {
          break outer;
        }
      }
    }
    $result[$resIndex++] = $value;
  }
  return $result;
}

return lazyValue;

