<?php
/**
 * @file
 *
 * Template file for taxonomy-like layout.
 */

$title = $item->title;
$body = drupal_render(field_view_field('node', $item, 'field_ding_body', 'teaser'));
$category = drupal_render(field_view_field('node', $item, 'group_audience', 'teaser'));
$image = _ding_nodelist_get_dams_image_info($item, 'field_list_image');
$event_date = _ding_nodelist_get_event_date($item);
$event_date = format_date($event_date, 'date_combined');
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
<div class="item event-item">
  <div class="item-list-image">
  <?php print $image ? theme('image_style', array_merge($image, array('style_name' => $conf['image_style']))) : ''; ?>
  </div>
  <div class="item-details">
    <div class="item-category"><?php print $category ?></div>
	<span class="item-date"><?php print $date ?></span>
    <h2 class="item-title"><?php print l($title, 'node/' . $item->nid); ?></h2>
    <span class="item-date"><?php print $event_date ?></span><span class="item-author"><?php print $author ?></span>
    <div class="item-body"><?php print $body ?></div>
  </div>
</div>
