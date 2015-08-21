<?php
/**
 * @file
 *
 * Template file for taxonomy-like layout.
 */

if ($variables['conf']['sorting'] == 'event_date') {
  // Get the object from the array in the case we are sorting by date.
  $item = array_shift(array_values($item));
}
$title = $item->title;
$body = field_view_field('node', $item, 'field_ding_body', 'teaser');
$body = render($body);
$image = _ding_nodelist_get_dams_image_info($item, 'field_list_image');
$event_date = _ding_nodelist_formated_ding_event_date($item);
$author = $item->name;

$library = field_view_field('node', $item, 'group_audience', array('label' => 'hidden'));
$library = render($library);

$address = field_view_field('node', $item, 'field_address');
$address = render($address);

$fee = field_view_field('node', $item, 'field_event_fee');
$fee = render($fee);

$category = field_view_field('node', $item, 'field_category');
$category = render($category);

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
<div class="item clearfix">
  <div class="item-list-image">
    <a href="<?php print url('node/' . $item->nid);?>"><?php
      print $image ? theme(
        'image_style',
        array_merge($image, array('style_name' => $conf['image_style']))
      ) : '';
    ?></a>
  </div>
  <div class="item-details">
    <h2 class="item-title"><?php print l($title, 'node/' . $item->nid); ?></h2>
    <span class="item-date"><?php print $event_date; ?></span>
    <span class="item-library"><?php print $library; ?><?php print $fee; ?> <?php print $category; ?></span>
    <span class="item-address"><?php print $address; ?></span>
    <div class="item-body"><?php print $body; ?></div>
  </div>
</div>
