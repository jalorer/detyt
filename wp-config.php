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
/** The name of the database for WordPress */
define( 'DB_NAME', 'sisecom_detyt' );

/** MySQL database username */
define( 'DB_USER', 'sisecom_detyt' );

/** MySQL database password */
define( 'DB_PASSWORD', 'x69Ppz8dR1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ')imq3eQN>T;<$X qdCgiL`Qtr_RW[1CLjxUW/@`T!D|$!bnh]+l+f(4#CQ+9.0I/' );
define( 'SECURE_AUTH_KEY',  'QVQNC/k>b/z@O.iBiRQmk,t:F0=L&FP++RUM#_)yk!z%dp&+1Q?`m[Srm=wM!d@J' );
define( 'LOGGED_IN_KEY',    'UGMX_i~20o<978Cp(keX]9Nc4&fH{_K7n$cz.v2`IUS5>RZx/I$iTczNV.%5QVu8' );
define( 'NONCE_KEY',        'QKDg&$=}oGg,j .,z^b5gQ,fHPcGOX;P|F.[P(4V4U%xOU{Z0Su.B4(`xP#s!`LH' );
define( 'AUTH_SALT',        'y}(+TgKIeMep#K%PJ><iJR|CSd0a6{~P{J5ySrpTdHSjP)Cw/vuOl/rEh+FOIr@5' );
define( 'SECURE_AUTH_SALT', '=y]pEA.4|x`]fh#+;&oSHrP c`,;Y{#>kggxFI!O%-%Gv*vC5nD!xHbn]| 8czNp' );
define( 'LOGGED_IN_SALT',   'i^fOSBY%$[~NRr;(Mtakm~|#GS7|V$4]BK6q{azgu$B!?lr_OPw3Q*fu%!*5i%kD' );
define( 'NONCE_SALT',       '.W42ycTloNHeWo4gqgaxi&SX;x$t(Io$gxqpcn<fmvu,PgBNLk9[?V8DXd3N{wwN' );

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

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
