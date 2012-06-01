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
  <ul class="ding_nodelist-items">
    <?php
      foreach ($items as $node) {
        print theme($template, array('item' => $node));
      }
    ?>
  </ul>
  <div class="item-list">
    <?php print ($links); ?>
  </div>
</div>
<?php endif; ?>
