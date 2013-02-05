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
?>
<div class="item news va-slice" <?php print $image ? 'style="background-image: url(\'' . file_create_url($image['path']) . '\')" title="' . $image['title'] . '"' : ''; ?>>
  <div class="va-title">
    <div class="event-label"><?php print t('News');?></div>
  </div>
  <div class="va-content">
    <div class="caption">
      <h3>
        <?php print l($item->title, 'node/' . $item->nid);?>
      </h3>
      <div class="category"><?php print drupal_render(field_view_field('node', $item, 'field_editorial_base_n', 'teaser'));?></div>
    </div>
  </div>
</div>
