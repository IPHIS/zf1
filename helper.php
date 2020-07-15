<?php
function array_key_exists_wrapper($key, $array) {
    return ($array[$key] ?? '!array') !== '!array' ? isset($array[$key]) : in_array($key, array_keys((array)$array));
}