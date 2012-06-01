<?php
/**
 * @file
 * Administration interface for nodelist configuration.
 */

/**
 * General settings form.
 */
function ding_nodelist_settings_form() {
  $options = node_type_get_names();

  if (empty($options)) {
    drupal_set_message(t('No content types were found, please add one first.'), 'error', FALSE);
  }

  $form['ding_nodelist_node_types'] = array(
    '#type' => 'checkboxes',
    '#title' => t('Available content types'),
    '#options' => $options,
    '#default_value' => variable_get('ding_nodelist_node_types', array()),
    '#description' => t('Choose content types avaialable for display'),
  );

  // Options as defiend by panels/plugins/cache/simple.inc
  $options = drupal_map_assoc(array(15, 30, 60, 120, 180, 240, 300, 600, 900, 1200, 1800, 3600, 7200, 14400, 28800, 43200, 86400, 172800, 259200, 345600, 604800), 'format_interval');
  $form['ding_nodelist_cache_default_time'] = array(
    '#type' => 'select',
    '#options' => $options,
    '#title' => t('Default cache life time'),
    '#default_value' => variable_get('ding_nodelist_cache_default_time', NL_CACHE_LIFETIME),
    '#description' => t('Lists will be cached by default for this period of time (seconds)'),
  );

  return system_settings_form($form);
}

/**
 * Template settings form.
 */
function ding_nodelist_templates_form($form, &$form_state) {

  $form['templates'] = array(
    '#type' => 'fieldset',
    '#title' => t('Templates'),
    '#tree' => TRUE,
    '#theme' => '_ding_nodelist_templates_table',
  );

  $templates = _ding_nodelist_get_templates();

  foreach ($templates as $template_name => $template) {
    $form['templates'][$template_name]['template_name'] = array(
      '#type' => 'hidden',
      '#value' => $template_name,
    );

    $form['templates'][$template_name]['title'] = array(
      '#type' => 'textfield',
      '#default_value' => isset($template['title']) ? $template['title'] : '',
    );

    $ct = node_type_get_names();
    $form['templates'][$template_name]['content_type'] = array(
      '#markup' => isset($ct[$template['content_type']]) ?
        $ct[$template['content_type']] : t('Missing (@ctname)', array('@ctname' => $template['content_type']))
    );

    // Visible in list of templates?
    $form['templates'][$template_name]['visible'] = array(
      '#type' => 'checkbox',
      '#default_value' => $template['status'] == NL_TPL_ACTIVE ? TRUE : FALSE,
    );
  }

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Save'),
  );

  return $form;
}

/**
 * bp_multiteaser_templates_form submit handler
 * Writes details about found templates
 */
function ding_nodelist_templates_form_submit($form, &$form_state) {
  foreach ($form_state['values']['templates'] as $template) {
    $tpl_record = array(
      'title' => check_plain($template['title']),
      'status' => $template['visible'] ? NL_TPL_ACTIVE : NL_TPL_HIDDEN
    );
    db_update('ding_nodelist_templates')->fields($tpl_record)
      ->condition('filename', $template['template_name'])->execute();
  }

  drupal_set_message(t('Template settings have been saved.'));
}
