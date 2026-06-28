<?php
function stackDelete($key) {
    $data = $this->__data__;
    $result = $data['delete']($key);
    $this->size = $data['size'];
    return $result;
}
return 'stackDelete';
