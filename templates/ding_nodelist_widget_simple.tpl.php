<?php
/**
 * @file
 * Simple list widget template.
 * Variables are:
 * $items - rendered items (HTML)
 * $conf - list configuration with:
 *  - classes - widget-specific CSS classes
 */
?>
<?php if ($items): ?>
<div class="<?php print $conf['classes']?>">
  <div class="ding_nodelist-items">
    <?php print $items; ?>
  </div>
</div>
<?php endif; ?>
