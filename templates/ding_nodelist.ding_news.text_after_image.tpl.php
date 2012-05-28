<?php
/**
 * @file
 * Ding event image and text template.
 * Avaialable fields are:
 * ding_content_tags
 * field_address
 * field_ding_body
 * field_list_image
 * field_main_image
 * field_materials
 * group_audience
 */
?>
<div class="ding_news">
  <h3><a href="<?php print url('node/' . $item->nid) ?>"><?php	print $item->title; ?></a></h3>
  
  <?php if(!empty($item->field_list_image)){ ?>  
          <div class="news_image">
            <?php print drupal_render(field_view_field('node', $item, 'field_list_image', 'teaser')); ?>
          </div>
  <?php } ?>
  
  <div class="node">
    <?php	print drupal_render(field_view_field('node', $item, 'field_ding_body', 'teaser')); ?>
    <?php	print $conf['date']; ?>
  </div>
  
  <div class="bottom">
    <ul>
      <li class="name">Submitted by <a href="<?php print url('user/' . $item->uid) ?>"><?php	print $item->name; ?></a></li>
      <li class="date"><?php echo format_date($item->created, 'custom', 'l m.d.Y - H:i'); ?></li>
    </ul>
  </div>
</div>