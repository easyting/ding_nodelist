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
<li class="event item">
  <div class="expand"><?php print l('', 'node/' . $item->nid);?></div>
  <div class="label"><?php print t('Calendar');?></div>
  <div class="event-date">
    <div class="event-day"><?php print format_date($event_date, 'day_only'); ?></div>
    <div class="event-month"><?php print format_date($event_date, 'short_month_only'); ?></div>
  </div>
  <div class="image">
  <?php print $image ? theme('image_style', array_merge($image, array('style_name' => $conf['image_style']))) : ''; ?>
  </div>
  <div class="data">
    <div class="caption">
      <h3>
        <?php print l($item->title, 'node/' . $item->nid);?>
      </h3>
    </div>
    <div class="library">
      <div class="event-time">
        <span><?php print t('Time');?></span>
        <span><?php print format_date($event_date, 'custom', 'H:i');?></span>
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
</li>
