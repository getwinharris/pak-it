<?php
$nativeMax = max;
function composeArgsRight($args, $partials, $holders, $isCurried) {
    $argsIndex = -1;
    $argsLength = (is_array($args) ? count($args) : strlen($args));
    $holdersIndex = -1;
    $holdersLength = (is_array($holders) ? count($holders) : strlen($holders));
    $rightIndex = -1;
    $rightLength = (is_array($partials) ? count($partials) : strlen($partials));
    $rangeLength = $nativeMax($argsLength - $holdersLength, 0);
    $result = array_fill(0, $rangeLength + $rightLength, null);
    $isUncurried = !$isCurried;
    while (++$argsIndex < $rangeLength) {
        $result[$argsIndex] = $args[$argsIndex];
    }
    $offset = $argsIndex;
    while (++$rightIndex < $rightLength) {
        $result[$offset + $rightIndex] = $partials[$rightIndex];
    }
    while (++$holdersIndex < $holdersLength) {
        if ($isUncurried || $argsIndex < $argsLength) {
            $result[$offset + $holders[$holdersIndex]] = $args[$argsIndex++];
        }
    }
    return $result;
}
return 'composeArgsRight';
