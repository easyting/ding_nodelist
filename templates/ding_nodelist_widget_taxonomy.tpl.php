<?php
/**
 * @file
 * Slider list widget template.
 * Variables are:
 * $items - node items (objects)
 * $conf - list configuration with:
 *  - classes - widget-specific CSS classes
 *  - title - list title
 * $links - list of links (array)
 */
?>
<?php if ($items): ?>
<div class="<?php print $conf['classes']?>">
  <div class="ding_nodelist-items">
    <?php
      foreach ($items as $node) {
        print theme($template, array('item' => $node));
      }
    ?>
  </div>
</div>
<?php endif; ?>
