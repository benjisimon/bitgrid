<?php
/*
 * A PHP file for organizing our configuration
 */

require_once(dirname(__FILE__) . "/tools/utils.php");

rel_require_once(__FILE__, 'tools/snippets.php');

define('SNIPPET_ROOT', dirname(__FILE__) . "/../snippets");
define('GRID_SIZE', 100);

function app_url($path = '', $args = array()) {
  return "http://{$_SERVER['SERVER_NAME']}/$path" .
         ($args ? '?' . http_build_query($args, false, '&') : '');
}


?>
