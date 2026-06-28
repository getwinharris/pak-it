<?php
$reFlags = '/\\w*$/';
function cloneRegExp($regexp) {
    $result = new $regexp['constructor']($regexp['source'], preg_match($reFlags, $regexp));
    $result['lastIndex'] = $regexp['lastIndex'];
    return $result;
}
return 'cloneRegExp';
