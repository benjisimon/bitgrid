<?php
/*
 * A PHP file for rendering our blank grid. It will eventually get manipulated by JS
 */
?>
<div class='grid'>
  <? for($i = 0; $i < GRID_SIZE; $i++) {?>
    <div class='cell cell-<?=$i?>' index='<?=$i?>'>
    </div>
  <? } ?>
  <div class='clear'></div>
</div>