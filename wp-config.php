<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'letscoding' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@UE@~zY3t7!Fts;HN>s6Rg_J[$)4lUIC>O%jQ$ Pj65JJpX(onN2_HogHz2^N_`n' );
define( 'SECURE_AUTH_KEY',  'yAa36q%:+wNfoYGh^|IL,2{BvpyBpiohr})<Po?<!E-N_3kNfN?8C9lfj}}^xr_C' );
define( 'LOGGED_IN_KEY',    '#rm5_u%eSfi+TD+:?%W~mC(Gno9`nK!/-oJ|@+Qi+ZC}dX_W~5eQT _7Eo|4b8gQ' );
define( 'NONCE_KEY',        'kr!r*spB0(@i,D;pn[0#_zyDn|zJlP8KD#o!niD5pv4oAM@AB)<L^gYMRcq]<7vT' );
define( 'AUTH_SALT',        '.ksUXpB;kf+K~AQe)+T3+2(c?%x:p_iefCJ~^TVF-gt;`9y8)f2bqZU6>T#KSI4e' );
define( 'SECURE_AUTH_SALT', 'f&qw*el(cpjmwHb8w#-Lt&D&c-LM0NZ)KZ4p:<5V3@2qr;9<qT+|=-uhyP[>t=9;' );
define( 'LOGGED_IN_SALT',   'X;p&k->I[r:%qrDnjw]cc_LYhM6)nYqP9;.@x!l4$5h|L~odNF|RB& */d.`k_kD' );
define( 'NONCE_SALT',       '>/c%!>RN.CuM~eGieSGP8xo{(fVZ<gGY2_o:6fYX%3Y>:Oj!wtGx}112O]-o9KUs' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
