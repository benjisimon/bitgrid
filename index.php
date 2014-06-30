<?php
/*
 * A PHP file for being our top level entry point to our app
 */
require_once('lib/siteconfig.php');

if(is_numeric(g($_GET, 'map'))) {
  header("Location: " . app_url() . "#{$_GET['map']}");
  exit();
}

start_snippet('shell');
?>


<?= snippet('grid'); ?>
<?= snippet('share'); ?>

<?= end_snippet(); ?>