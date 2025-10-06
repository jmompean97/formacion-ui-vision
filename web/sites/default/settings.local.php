<?php

/**
 * @file
 * Local development override configuration feature.
 *
 * To activate this feature, copy and rename it such that its path plus
 * filename is 'sites/default/settings.local.php'. Then, go to the
 * 'Configuration' page and click the 'Import' button. This will copy the
 * configuration from your staging environment to your local environment.
 *
 * If you are using the Acquia environment, you can also use this file to
 * specify database connection information, although it is not recommended
 * to do so on production sites.
 */

/**
 * Database configuration.
 */
$databases['default']['default'] = [
  'database' => 'db',
  'username' => 'db',
  'password' => 'db',
  'prefix' => '',
  'host' => 'db',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
];

/**
 * Salt for one-time login links and cancel links, form tokens, etc.
 */
$settings['hash_salt'] = 'your-hash-salt-here';

/**
 * Access control for update.php script.
 */
$settings['update_free_access'] = TRUE;

/**
 * Skip file system permissions hardening.
 */
$settings['skip_permissions_hardening'] = TRUE;

/**
 * Exclude modules from configuration synchronization.
 */
$settings['config_exclude_modules'] = ['devel', 'stage_file_proxy'];

/**
 * Enable local development services.
 */
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

/**
 * Enable/disable config_split module.
 */
$config['config_split.config_split.local']['status'] = TRUE;
