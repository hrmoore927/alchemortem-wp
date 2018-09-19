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
define('DB_NAME', 'alchemortem');

/** MySQL database username */
define('DB_USER', 'hrmoore927');

/** MySQL database password */
define('DB_PASSWORD', 'seaver08');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '8OCaS04f0zw/RjfLiEEz2z8y@!@26AB:Z(B.@> bRQ<ejrno3-?0/F mV6G/jy+r');
define('SECURE_AUTH_KEY',  '3~ed7cm@1gXax<j?tWQ0-h*UhRvadOm4#&D?SjI,_62}@]m}_${P{h5R[[RN^Z+P');
define('LOGGED_IN_KEY',    '9x.eIo4U]Y[$5T(HK^eB#*Esnsr0:V9Ki=A{:lWa41}r?}>gjn95w_u@I^wb ah$');
define('NONCE_KEY',        ']c:DTT9<!-9pPqJe`>><Yik<1bi,I9j-n-$]=Q2d`{D;qw-#,+1ZvauiaUdJK8P7');
define('AUTH_SALT',        'pc}*;ph)D,vEF1XCJne/%YSX @[p73f-|gYA>9mBbx7x_/Xd_6^d?fq5KI1uqy&3');
define('SECURE_AUTH_SALT', '/|}OVS=6#pz;9jdiB:.d1^K3F8]#>ZZ!l-|G q`r$_Ai<CKqclY%lbgPs7in)_`l');
define('LOGGED_IN_SALT',   'M&;l{ZAt$x%{)iCbA`]PU;Uw59!QBJ^tMOP`p>fre;Yi):]uVL:k*4,0``; @:S]');
define('NONCE_SALT',       'jrczZ$mjY,f}D_y&4lPwlPENSD3>GHiIGO}n1kK=mVJ/pyV7vHr7CKz94|d_NFqZ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
