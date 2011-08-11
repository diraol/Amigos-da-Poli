<?php

/**
 * @file
 * Drupal site-specific configuration file.
 *
 * Para ver os modelos consulte o documento default.settings.php
 *
 */

$databases = array (
  'default' => 
  array (
    'default' => 
    array (
      'database' => 'amigosdapoli',
      'username' => '',
      'password' => '',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
    ),
  ),
);

$update_free_access = FALSE;


/**
 * Salt for one-time login links and cancel links, form tokens, etc.
 *
 * This variable will be set to a random value by the installer. All one-time
 * login links will be invalidated if the value is changed.  Note that this
 * variable must have the same value on every web server.  If this variable is
 * empty, a hash of the serialized database credentials will be used as a
 * fallback salt.
 *
 * For enhanced security, you may set this variable to a value using the
 * contents of a file outside your docroot that is never saved together
 * with any backups of your Drupal files and database.
 *
 * Example:
 *   $drupal_hash_salt = file_get_contents('/home/example/salt.txt');
 *
 */
$drupal_hash_salt = '';

# $base_url = 'http://www.example.com';  // NO trailing slash!

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);

ini_set('session.gc_maxlifetime', 200000);

ini_set('session.cookie_lifetime', 2000000);

/**
 * Drupal automatically generates a unique session cookie name for each site
 * based on its full domain name. If you have multiple domains pointing at the
 * same Drupal site, you can either redirect them all to a single domain (see
 * comment in .htaccess), or uncomment the line below and specify their shared
 * base domain. Doing so assures that users remain logged in as they cross
 * between your various domains.
 */
# $cookie_domain = 'example.com';

# $conf['site_name'] = 'My Drupal site';
# $conf['theme_default'] = 'garland';
# $conf['anonymous'] = 'Visitor';

# $conf['maintenance_theme'] = 'bartik';

# $conf['css_gzip_compression'] = FALSE;
# $conf['js_gzip_compression'] = FALSE;
