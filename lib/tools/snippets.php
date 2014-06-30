<?php
/*
 * A PHP file for implementing a super simple template environment
 */

function snippet($_name, $_args = array()) {
  extract($_args);
  require(SNIPPET_ROOT . "/$_name.php");
}

$_snippet_stack = A();
global $_snippet_stack;

function start_snippet($name, $args = array()) {
  global $_snippet_stack;
  $_snippet_stack[] = array('name' => $name, 'args' => $args);
  ob_start();
}

function end_snippet() {
  global $_snippet_stack;

  $body = ob_get_clean();
  $s = array_pop($_snippet_stack);

  return snippet($s['name'], $s['args'] + array('body' => $body));  
}

?>