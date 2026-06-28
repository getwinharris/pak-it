<?php
$toArray = require __DIR__ . '/toArray.php';
function wrapperNext() {
    if ($this->__values__ === null) {
        $this->__values__ = $toArray($this->value());
    }
    $done = $this->__index__ >= (is_array($this->__values__) ? count($this->__values__) : strlen($this->__values__));
    $value = ($done ? null : $this->__values__[$this->__index__++]);
    return [
        'done' => $done,
        'value' => $value
    ];
}
return 'wrapperNext';
