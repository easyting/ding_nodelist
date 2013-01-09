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

$image = _ding_nodelist_get_dams_image_info($item, 'field_list_image');
$event_date = _ding_nodelist_get_event_date($item);
?>
<div class="item event va-slice" <?php print $image ? 'style="background-image: url(\'' . file_create_url($image['path']) . '\')" title="' . $image['title'] . '"' : ''; ?>>
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
        <span><?php print format_date($event_date, 'custom', 'H:i'); ?></span>
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
