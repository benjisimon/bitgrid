<?php
/*
 * A PHP file for implementing generic utilities
 */


function rel_require_once($base, $path) {
  require_once(dirname($base) . "/$path");
}

function rel_require($base, $path) {
  require(dirname($base) . "/$path");
}

function A() {
  $array = func_get_args();
  return $array;
}

function g($array, $key, $default = false) {
  return isset($array[$key]) ? $array[$key] : $default;
}


?>