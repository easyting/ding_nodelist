<?php
/**
 * @file
 * Single list widget template.
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
  <h2 class="ding_nodelist-title"><?php print $conf['title']; ?></h2>
  <div class="ding_nodelist-items">
    <?php
      $node = reset($items);
      print theme($template, array('item' => $node));
    ?>
  </div>
  <? if (count($links)): ?>
  <div class="ding_nodelist-links">
    <ul>
    <?php foreach ($links as $key => $bottom) : ?>
      <li>
      <?php print l(t($bottom['text']), $bottom['links']); ?>
      </li>
    <?php endforeach;?>
    </ul>
  </div>
  <?php endif; ?>
</div>
<?php endif; ?>
