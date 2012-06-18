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
?>
<li class="item news">
  <div class="expand"><?php print l('', 'node/' . $item->nid);?></div>
  <div class="label"><?php print t('News');?></div>
  <div class="image"><?php print theme('image_style', array('style_name' => $conf['image_style'], 'path' => $image[0]['#item']['uri']));?></div>
  <div class="data">
    <div class="caption">
      <h3>
        <?php print l($item->title, 'node/' . $item->nid);?>
      </h3>
      <div class="category"><?php print drupal_render(field_view_field('node', $item, 'field_editorial_base_n', 'teaser'));?></div>
    </div>
  </div>
</li>
