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
$address = field_view_field('node', $item, 'field_address');
$address = render($address);
?>
<li class="event item">
  <div class="item_content">
    <div class="expand"><?php print l($item->title, 'node/' . $item->nid);?></div>
      <div class="event-place">
        <?php print $address; ?>
      </div>
    <div class="image">
      <a href="<?php print url('node/' . $item->nid);?>"><?php print $image ? theme('image_style', array_merge($image, array('style_name' => $conf['image_style']))) : ''; ?></a>
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
        <?php
          $audience = field_view_field('node', $item, 'group_audience', 'teaser');
          print drupal_render($audience);
        ?>
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
</li>
