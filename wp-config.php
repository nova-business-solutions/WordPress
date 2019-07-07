<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// Support multiple environments
// set the config file based on current environment
if (strpos(getenv('WP_ENV'),'stage')) !== false) {
    $config_file = 'azure-config/wp-config.azure.stage.php';
}

elseif (strpos(getenv('WP_ENV'),'prod')) !== false) {
    $config_file = 'azure-config/wp-config.azure.prod.php';
}

$path = dirname (__FILE__) . '/';
if (file_exists($path . $config_file)) {
    // include the config file if it exists
    require_once $path . $config_file;
}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

?>
