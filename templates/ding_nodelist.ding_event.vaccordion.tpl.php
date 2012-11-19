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
      <div class="event-day"><?php print format_date($event_date, 'day_only'); ?></div>
      <div class="event-month"><?php print format_date($event_date, 'short_month_only'); ?></div>
    </div>
  </div>
  <div class="va-content">
    <div class="caption">
      <h3>
        <?php print l($item->title, 'node/' . $item->nid);?>
      </h3>
    </div>
    <div class="library">
      <div class="event-time">
        <span><?php print t('Time');?></span>
        <span><?php print date('H:i', $event_date);?></span>
      </div>
      <?php print drupal_render(field_view_field('node', $item, 'group_audience', 'teaser'));?>
      <div class="event-fee">
      <?php
        $fee = current(field_get_items('node', $item, 'field_event_fee'));
        $fee = $fee['value'] ? $fee['value'] . ' Kr.' : t('Gratis');
        print '&mdash; ' . $fee;
      ?>
      </div>
    </div>
  </div>
</div>
