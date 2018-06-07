<?php

/**
 * Get value by key or default if not exists
 * @param array $array
 * @param string|int $key
 * @param mixed $default
 * @return mixed
 */
function key_get($array, $key, $default = null) {
    return isset($array[$key]) || key_exists($key, $array) ? $array[$key] : $default;
}

/**
 * Set default value if not exists in $array
 * @param array $array
 * @param string|int $key
 * @param mixed $default
 * @return array $array
 */
function key_setdefault(&$array, $key, $default = null) {
    if (!isset($array[$key]) && !key_exists($key, $array)) {
        $array[$key] = $default;
    }
    return $array;
}
