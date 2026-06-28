<?php
/* Built-in method references for those with the same name as other `lodash` methods. */
$nativeMax = Math.max;

/**
* This function is like `composeArgs` except that the arguments composition
* is tailored for `_.partialRight`.
*
* @private
* @param {Array} args The provided arguments.
* @param {Array} partials The arguments to append to those provided.
* @param {Array} holders The `partials` placeholder indexes.
* @params {boolean} [isCurried] Specify composing for a curried function.
* @returns {Array} Returns the new array of composed arguments.
*/
function composeArgsRight($args, $partials, $holders, $isCurried) {
  $argsIndex = -1;
      $argsLength = (is_array($args) ? count($args) : strlen($args));
      $holdersIndex = -1;
      $holdersLength = (is_array($holders) ? count($holders) : strlen($holders));
      $rightIndex = -1;
      $rightLength = (is_array($partials) ? count($partials) : strlen($partials));
      $rangeLength = $nativeMax($argsLength - $holdersLength, 0);
      $result = Array($rangeLength + $rightLength);
      $isUncurried = !isCurried;

  while (++$argsIndex < $rangeLength) {
    $result[$argsIndex] = args[$argsIndex];
  }
  $offset = argsIndex;
  while (++$rightIndex < $rightLength) {
    $result[$offset + $rightIndex] = partials[$rightIndex];
  }
  while (++$holdersIndex < $holdersLength) {
    if ($isUncurried || $argsIndex < $argsLength) {
      $result[$offset + holders[$holdersIndex]] = args[$argsIndex++];
    }
  }
  return $result;
}

return composeArgsRight;

