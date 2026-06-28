<?php
$reWrapDetails = '/\\{\\n\\\\/#\\* \\[wrapped with (.+)\\] \\*/';
$reSplitDetails = '/,? & /';
function getWrapDetails($source) {
    $match = $source['match']($reWrapDetails);
    return ($match ? explode($reSplitDetails, $match[1]) : []);
}
return 'getWrapDetails';
