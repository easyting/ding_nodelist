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
?>
<?php	print drupal_render(field_view_field('node', $item, 'title', 'teaser')); ?>
<?php	print drupal_render(field_view_field('node', $item, 'field_ding_body', 'teaser')); ?>
<?php	print drupal_render(field_view_field('node', $item, 'field_list_image', 'teaser')); ?>
