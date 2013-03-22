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
<li class="item news">
  <div class="expand"><?php print l($item->title, 'node/' . $item->nid);?></div>
  <div class="label"><?php print t('News');?></div>
  <div class="image"><?php print $image ? theme('image_style', array_merge($image, array('style_name' => $conf['image_style']))) : '';?></div>
  <div class="data">
    <div class="caption">
      <h3>
        <?php print l($item->title, 'node/' . $item->nid);?>
      </h3>
      <div class="category"><?php
        $body = field_view_field('node', $item, 'field_editorial_base_n', 'teaser');
        print drupal_render($body);
      ?></div>
    </div>
  </div>
</li>
