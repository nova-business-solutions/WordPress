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

// ** MySQL settings - You can get this info from your web host ** //
define( 'DB_NAME', getenv ('DB_NAME') );
//define( 'DB_NAME', 'dbcondorwordpress');

/** MySQL database username */
define( 'DB_USER', getenv ('DB_USER') );
//define( 'DB_USER', 'condorwordpressuser@mariadb-webclientes' );

/** MySQL database password */
define( 'DB_PASSWORD', getenv ('DB_PASSWORD') );
//define( 'DB_PASSWORD', 'yGT1s15h3Fk4' );

/** MySQL hostname */
define( 'DB_HOST', getenv ('DB_HOST') );
//define( 'DB_HOST', 'mariadb-webclientes.mariadb.database.azure.com' );

if (strpos(getenv('WP_ENV'),'prod')) !== false) {
    echo "prod!!!!!!!!!!!!!!!";
  //  $config_file = 'azure-config/wp-config.azure.stage.php';
}


/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'L HKV1;uy1h#YK}h_d8Wr)X_@/6t{|-mkhJ&tm(gZ/e.%6]m:;0<6>g7-Jg>&TwO' );
define( 'SECURE_AUTH_KEY',  '(5x}T(Ie{} U]>Ec-%kOrMuz>P]/f*4!M@n(Kp!vdn25XF2Su2>Tt@+E2uE~`S%1' );
define( 'LOGGED_IN_KEY',    '$sc`;./G2#@KZl.+mhzIkk~DNQ%9KNFxx^/R}V5*;<s*Pj~3^Cv&J^wqdq^+ae2@' );
define( 'NONCE_KEY',        ')FX;6gA>[,<Zm]TZb.a}m#;Sjy~uah;VL& Qwuf7{V7VF|)+OqD0[dL_B4m==55k' );
define( 'AUTH_SALT',        '5zpog!&JyIfyIOWY9K=ZIu=>MkBzvR9%B)bI.lxb(av4iY;N N9!2L|qo->w?%hB' );
define( 'SECURE_AUTH_SALT', '$`l.>)i 3WeGl4iG1q2f^Uoyzq,S|7P,]PMm<[r0Vjo=p+w/WAD4^vMwNOjcYe61' );
define( 'LOGGED_IN_SALT',   '|aN!{=[5+mSy]vB^PjuXZy|DE{%Cm[KVkG[wkMM%F;<p(wSbyr8WMCqriJUAZXwh' );
define( 'NONCE_SALT',       '-xiBV0akI75e8614  qsV!eVgJZaA58[PJS!im#-N1Kq>,>XEv9*4eIk?^/vv!c_' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );