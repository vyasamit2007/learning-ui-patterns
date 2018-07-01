<?php

/**
 * @file
 * Theme settings form for UI Patterns Theme theme.
 */

/**
 * Implements hook_form_system_theme_settings_alter().
 */
function uip_theme_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['uip_theme'] = [
    '#type' => 'details',
    '#title' => t('UI Patterns Theme'),
    '#open' => TRUE,
  ];

  $form['uip_theme']['font_size'] = [
    '#type' => 'number',
    '#title' => t('Font size'),
    '#min' => 12,
    '#max' => 18,
    '#default_value' => theme_get_setting('font_size'),
  ];

}
