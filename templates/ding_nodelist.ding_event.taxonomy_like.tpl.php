<?php
/**
 * @file
 *
 * Template file for taxonomy-like layout.
 */

$title = $item->title;
$body = drupal_render(field_view_field('node', $item, 'field_ding_body', 'teaser'));
$image = field_view_field('node', $item, 'field_list_image', 'teaser');
$image = theme('image_style', array('style_name' => $conf['image_style'], 'path' => $image[0]['#item']['uri']));
$date = field_get_items('node', $item, 'field_event_date');
$date = strtotime($date[0]['value']);
if (!empty($item->publish_on)) {
  $date = $item->publish_on;
}
$date = date('D, d/m/Y - H:i', $date);

/**
 * Available variables:
 *
 * $title
 *   Node title.
 * $body
 *   Node body teaser.
 * $image
 *   Node list image html tag.
 * $date
 *   Node date, created or published if set.
 */
?>
<div class="item"></div>
