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
$edbase = field_view_field('node', $item, 'field_editorial_base_n', 'teaser');
?>
<div class="item">
	<div class="article_image">
    <?php 
    if ($image) {
      print theme('image_style', array('style_name' => 'node_list_carousel', 'path' => $image[0]['#item']['uri']));
    }
    ?>
  </div>
  <div class="article-info">
  <div class="category"><?php print drupal_render($edbase); ?></div>
    <h3><a href="<?php print url('node/' . $item->nid) ?>"><?php	print $item->title; ?></a></h3>
    <div class="node">
      <?php	print drupal_render(field_view_field('node', $item, 'field_ding_body', 'teaser')); ?>
    </div>
    <div class="more"><?php print l(t('More'), 'node/' . $item->nid); ?></div>
  </div>
</div>
