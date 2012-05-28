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
  <h2 class="ding_nodelist-title"><?php print $conf['title']; ?></h2>
  <div class="ding_nodelist-items">
    <?php print $items; ?>
  </div>
  <div class="links">
    <?php print $links; ?>
  </div>
</div>
<?php endif; ?>
