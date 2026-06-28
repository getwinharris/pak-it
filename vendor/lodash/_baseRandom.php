<?php
$nativeFloor = floor;
$nativeRandom = random;
function baseRandom($lower, $upper) {
    return $lower + $nativeFloor($nativeRandom() * $upper - $lower + 1);
}
return 'baseRandom';
