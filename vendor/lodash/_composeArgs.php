<?php
$nativeMax = max;
function composeArgs($args, $partials, $holders, $isCurried) {
    $argsIndex = -1;
    $argsLength = (is_array($args) ? count($args) : strlen($args));
    $holdersLength = (is_array($holders) ? count($holders) : strlen($holders));
    $leftIndex = -1;
    $leftLength = (is_array($partials) ? count($partials) : strlen($partials));
    $rangeLength = $nativeMax($argsLength - $holdersLength, 0);
    $result = array_fill(0, $leftLength + $rangeLength, null);
    $isUncurried = !$isCurried;
    while (++$leftIndex < $leftLength) {
        $result[$leftIndex] = $partials[$leftIndex];
    }
    while (++$argsIndex < $holdersLength) {
        if ($isUncurried || $argsIndex < $argsLength) {
            $result[$holders[$argsIndex]] = $args[$argsIndex];
        }
    }
    while ($rangeLength--) {
        $result[$leftIndex++] = $args[$argsIndex++];
    }
    return $result;
}
return 'composeArgs';
