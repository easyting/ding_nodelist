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
<div class="ding_event">
  <?php if(!empty($item->field_eddb_event_limage)){ ?>  
          <div class="event_image">
            <?php print drupal_render(field_view_field('node', $item, 'field_eddb_event_limage', 'teaser')); ?>
          </div>
  <?php } ?>
 
  <h3><a href="<?php print url('node/' . $item->nid) ?>"><?php	print $item->title; ?></a></h3>
 
  <div class="event_body">
    <?php	print drupal_render(field_view_field('node', $item, 'body', 'teaser')); ?>
  </div>
  
   <div class="bottom">
    <ul>
      <li class="name">Submitted by <a href="<?php print url('user/' . $item->uid) ?>"><?php	print $item->name; ?></a></li>
      <li class="date"><?php echo format_date($item->created, 'custom', 'l m.d.Y - H:i'); ?></li>
    </ul>
  </div>

</div>
