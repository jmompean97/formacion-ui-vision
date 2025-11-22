<?php

/**
 * @file
 * Post update functions for the Terra Base module.
 */

/**
 * Implements hook_removed_post_updates().
 */
function terra_base_removed_post_updates() {
  return [
    'terra_base_post_update_000_enable_better_exposed_filters' => '3.0.0',
    'terra_base_post_update_001_install_superuser_role' => '3.0.0',
    'terra_base_post_update_002_update_administrator_role' => '3.0.0',
    'terra_base_post_update_003_change_administrator_role' => '3.0.0',
    'terra_base_post_update_004_enable_field_group' => '3.0.0',
  ];
}
