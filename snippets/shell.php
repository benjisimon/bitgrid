<?php
/*
 * A PHP file for rendering our basic page
 */
?>
<!DOCTYPE html>
<html>
  <head>
    <title>bitgrid | Here it is. Now go find a use for it.</title>
    <link type='text/css' rel='Stylesheet' href='<?= app_url('css/layout.css'); ?>'/>
    <script src='<?= app_url('js/tools/jquery-min.js'); ?>' type='text/javascript'></script>

  </head>

  <body>
    <div class='header'>
      <h1>bitgrid</h1>
      <h2>Here it is. <b>Now go find a use for it.</b></h2>
    </div>
    
    <div class='body'>
      <?= $body ?>
    </div>

    <div class='footer'>
      &copy; <?= date('Y'); ?> <a href='http://blogbyben.com'>Ben Simon</a>
    </div>
    <script type='text/javascript'>
      AppCtx = {
        grid: { size: <?= GRID_SIZE; ?> },
        app: { url: '<?= app_url(); ?>' }
      };

    </script>


    <script type='text/javascript' src='<?= app_url('js/calc.js');?>'></script>
    <script type='text/javascript' src='<?= app_url('js/grid.js');?>'></script>
  </body>
</html>
