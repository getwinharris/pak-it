<?php
function iteratorToArray($iterator) {
    $data = null;
    $result = [];
    while (!$data = $iterator['next']()['done']) {
        $result[] = $data['value'];
    }
    return $result;
}
return 'iteratorToArray';
