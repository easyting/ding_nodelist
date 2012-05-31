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
$edbase = taxonomy_term_load($item->field_eddb_article_base[LANGUAGE_NONE][0]['value']);
?>
<div class="ding_editorial_article">
  <div class="category"><?php print l(t($edbase->name), 'taxonomy/term/' . $edbase->tid); ?></div>  
  <h3><a href="<?php print url('node/' . $item->nid) ?>"><?php	print $item->title; ?></a></h3>
  
  <div class="article_image">
    <?php	print drupal_render(field_view_field('node', $item, 'field_eddb_article_limage', 'teaser')); ?>
  </div>
  
  <div class="node">
    <?php	print drupal_render(field_view_field('node', $item, 'body', 'teaser')); ?>
  </div>
  <div class="more"><?php print l(t('More'), 'node/' . $item->nid); ?></div>
</div>
