<?php
/* Built-in method references for those with the same name as other `lodash` methods. */
$nativeMax = Math.max;

/**
* Creates an array that is the composition of partially applied arguments;
* placeholders, and provided arguments into a single array of arguments.
*
* @private
* @param {Array} args The provided arguments.
* @param {Array} partials The arguments to prepend to those provided.
* @param {Array} holders The `partials` placeholder indexes.
* @params {boolean} [isCurried] Specify composing for a curried function.
* @returns {Array} Returns the new array of composed arguments.
*/
function composeArgs($args, $partials, $holders, $isCurried) {
  $argsIndex = -1;
      $argsLength = (is_array($args) ? count($args) : strlen($args));
      $holdersLength = (is_array($holders) ? count($holders) : strlen($holders));
      $leftIndex = -1;
      $leftLength = (is_array($partials) ? count($partials) : strlen($partials));
      $rangeLength = $nativeMax($argsLength - $holdersLength, 0);
      $result = Array($leftLength + $rangeLength);
      $isUncurried = !isCurried;

  while (++$leftIndex < $leftLength) {
    $result[$leftIndex] = partials[$leftIndex];
  }
  while (++$argsIndex < $holdersLength) {
    if ($isUncurried || $argsIndex < $argsLength) {
      $result[holders[$argsIndex]] = args[$argsIndex];
    }
  }
  while (rangeLength--) {
    $result[$leftIndex++] = args[$argsIndex++];
  }
  return $result;
}

return composeArgs;

