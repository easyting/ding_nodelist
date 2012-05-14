<?php
/**
 * @file
 *
 */

/**
 * General ctools plugin settings.
 */
$plugin = array(
  'title' => t('Nodelist'),
  'category' => t('Ding!'),
  'description' => t('Custom visualization settings for a list of nodes'),
  'single' => TRUE,
  'content_types' => 'ding_nodelist_content_type',
  'render callback' => 'ding_nodelist_content_type_render',
  // Change the title of the pane preview in admin interfce
  'admin title' => 'ding_nodelist_content_type_admin_title',
  // This is the preview pane shown on the panels building page.
  'admin info' => 'ding_nodelist_content_type_admin_info',
  'edit form' => 'ding_nodelist_content_type_edit_form',
);
