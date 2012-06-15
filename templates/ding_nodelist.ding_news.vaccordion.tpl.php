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
<div class="item news va-slice" style="background-image: url('<?php print image_style_url($conf['image_style'], $image[0]['#item']['uri']);?>')">
  <div class="va-title">
    <div class="event-label"><?php print t('News');?></div>
  </div>
  <div class="va-content">
    <div class="caption">
      <h3>
        <?php print l($item->title, 'node/' . $item->nid);?>
      </h3>
    </div>
  </div>
</div>
