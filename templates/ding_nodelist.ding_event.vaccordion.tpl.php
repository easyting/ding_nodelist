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

$image = field_view_field('node', $item, 'field_list_image', 'teaser');
$event_date = field_get_items('node', $item, 'field_event_date');
$event_date = strtotime($event_date[0]['value']);
?>
<div class="item event va-slice" style="background-image: url('<?php print image_style_url($conf['image_style'], $image[0]['#item']['uri']);?>')">
  <div class="va-title">
    <div class="event-label"><?php print t('Calendar');?></div>
    <div class="event-date">
      <div class="event-day"><?php echo date('d', $event_date);?></div>
      <div class="event-month"><?php echo date('M', $event_date);?></div>
    </div>
  </div>
  <div class="va-content">
    <div class="caption">
      <h3>
        <?php print l($item->title, 'node/' . $item->nid); ?>
      </h3>
    </div>
    <div class="library">
      <div class="event-time">Kl. <?php echo date('H:i', $event_date);?></div> 
      <?php print drupal_render(field_view_field('node', $item, 'group_audience', 'teaser')); ?>
    </div>
  </div>
</div>
