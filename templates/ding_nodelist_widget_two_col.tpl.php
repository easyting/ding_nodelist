<?php
/**
 * @file
 * Simple list widget template.
 * Variables are:
 * $items - node items (objects)
 * $conf - list configuration with:
 *  - classes - widget-specific CSS classes
 *  - title - list title
 * $links - list of links (array)
 */
?>
<?php if ($items): ?>
<div class="<?php print $conf['classes']?> taxonomy-level-one">
  <h2 class="ding_nodelist-title"><?php print $conf['title']; ?></h2>
  <div class="ding_nodelist-items">
    <div class="row">
    <?php
      // @todo
      // Add logic for splitting every two items into separate rows.
      $i = 0;
      foreach ($items as $node) {
        if ($i % 2 == 0 && $i) {
          echo '</div>';
          echo '<div class="row">';
        }
        print theme($template, array('item' => $node));
        $i++;
      }
    ?>
    </div>
  </div>
</div>
<?php endif; ?>
