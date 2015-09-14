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
$edbase = field_view_field('node', $item, 'field_editorial_base_e', array('label' => 'hidden'));
$address = field_view_field('node', $item, 'field_address');
$address = render($address);

$event_date = _ding_nodelist_formated_ding_event_date($item);
$fee = field_view_field('node', $item, 'field_event_fee');
$fee = render($fee);

$library = field_view_field('node', $item, 'group_audience', array('label' => 'hidden'));
$library = render($library);

?>
<div class="item">
  <div class="event-image">
    <a href="<?php print url('node/' . $item->nid);?>"><?php print $image ? theme('image_style', array_merge($image, array('style_name' => $conf['image_style']))) : ''; ?></a>
  </div>
  <div class="event-place">
    <?php print $address; ?>
  </div>
  <div class="article-info">
    <div class="category"><?php print drupal_render($edbase);?></div>
    <h3><a href="<?php print url('node/' . $item->nid);?>"><?php print $item->title;?></a></h3>
    <div class="node">
      <div><?php print $event_date;?></div>
      <span><?php print $library;?></span>
      <span><?php print $fee;?></span>
      <p>
        <?php
          $teaser = field_get_items('node', $item, 'field_ding_body');
          print $teaser[0]['safe_summary'] == '' ? $teaser[0]['safe_value'] : $teaser[0]['safe_summary'];
        ?>
      </p>
      <p>
        <?php print l(t('More'), 'node/' . $item->nid);?>
      </p>
    </div>
  </div>
</div>
