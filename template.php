<?php

/**
 * Implementation of hook_preprocess_html().
 */
function garland_cbf_preprocess_html(&$variables) {
  drupal_add_css(
    drupal_get_path('theme', 'garland_cbf') . '/brand/general/general-style.css',
    ['group' => CSS_THEME]
  );
  drupal_add_css(
    drupal_get_path('theme', 'garland_cbf') . '/brand/christian/christian-style.css',
    ['group' => CSS_THEME]
  );
}
