<?php
/**
 * @file
 *
 * Template file for taxonomy-like layout.
 */

$title = $item->title;
$body = drupal_render(field_view_field('node', $item, 'field_ding_body', 'teaser'));
$image = field_view_field('node', $item, 'field_list_image', 'teaser');
$image = (!empty($image[0]['#item']['uri'])) ? theme('image_style', array('style_name' => $conf['image_style'], 'path' => $image[0]['#item']['uri'])) : '';
$date = field_get_items('node', $item, 'field_event_date');
$date = strtotime($date[0]['value']);
if (!empty($item->publish_on)) {
  $date = $item->publish_on;
}
$date = date('D, d/m/Y - H:i', $date);
$author = $item->name;

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
 * $author
 *   Node author name.
 */
?>
<div class="item">
  <div class="item-list-image"><?php print $image ?></div>
  <div class="item-details">
    <h2 class="item-title"><?php print l($title, 'node/' . $item->nid); ?></h2>
    <span class="item-date"><?php print $date ?></span><span class="item-author"><?php print $author ?></span>
    <div class="item-body"><?php print $body ?></div>
  </div>
</div>
