<?php
$nativeMax = max;
$nativeMin = min;
function getView($start, $end, $transforms) {
    $index = -1;
    $length = (is_array($transforms) ? count($transforms) : strlen($transforms));
    while (++$index < $length) {
        $data = $transforms[$index];
        $size = $data['size'];
        switch ($data['type']) {
            case 'drop':
                $start += $size;
                break;
            case 'dropRight':
                $end -= $size;
                break;
            case 'take':
                $end = $nativeMin($end, $start + $size);
                break;
            case 'takeRight':
                $start = $nativeMax($start, $end - $size);
                break;
        }
    }
    return [
        'start' => $start,
        'end' => $end
    ];
}
return 'getView';
