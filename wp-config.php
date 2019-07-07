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

//define( 'DB_NAME', getenv ('DB_NAME') );
define( 'DB_NAME', 'dbcondorwordpress');

/** MySQL database username */
//define( 'DB_USER', getenv ('DB_USER') );
define( 'DB_USER', 'condorwordpressuser@mariadb-webclientes' );

/** MySQL database password */
//define( 'DB_PASSWORD', getenv ('DB_PASSWORD') );
define( 'DB_PASSWORD', 'yGT1s15h3Fk4' );

/** MySQL hostname */
//define( 'DB_HOST', getenv ('DB_HOST') );
define( 'DB_HOST', 'mariadb-webclientes.mariadb.database.azure.com' );





// Support multiple environments
// set the config file based on current environment
if (strpos(getenv('WP_ENV'),'stage')) !== false) {
    $config_file = 'azure-config/wp-config.azure.stage.php';
}

elseif (strpos(getenv('WP_ENV'),'prod')) !== false) {
    $config_file = 'azure-config/wp-config.azure.prod.php';
}

$path = dirname (__FILE__) . '/';
//if (file_exists($path . $config_file)) {
    // include the config file if it exists
 //   require_once $path . $config_file;
//}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_unicode_ci' );

// dynamically change url per environment
/*define('WP_HOME','http://' . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_CONTENT_URL', '/wp-content');
define('DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST']);
*/
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

