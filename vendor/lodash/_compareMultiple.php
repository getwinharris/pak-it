<?php
$compareAscending = require __DIR__ . '/_compareAscending.php';
function compareMultiple($object, $other, $orders) {
    $index = -1;
    $objCriteria = $object['criteria'];
    $othCriteria = $other['criteria'];
    $length = (is_array($objCriteria) ? count($objCriteria) : strlen($objCriteria));
    $ordersLength = (is_array($orders) ? count($orders) : strlen($orders));
    while (++$index < $length) {
        $result = $compareAscending($objCriteria[$index], $othCriteria[$index]);
        if ($result) {
            if ($index >= $ordersLength) {
                return $result;
            }
            $order = $orders[$index];
            return $result * ($order == 'desc' ? -1 : 1);
        }
    }
    return $object['index'] - $other['index'];
}
return 'compareMultiple';
