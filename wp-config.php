<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'majagrap_monument');

/** MySQL database username */
define('DB_USER', 'majagrap_demoadm');

/** MySQL database password */
define('DB_PASSWORD', 'p@ss4Demo1');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '4IK+>6-pJ!=qC^({jA*~w2P#WP.5!g~=FJ)|t4+I~rtTC@}}L2bC!iJ4hUd@?I9C');
define('SECURE_AUTH_KEY',  'sY()Q|GHHuoiN&hq&g^!)ota.Vx[|KVLm,2Y6+9SBB|F7ZCjiy%;*+~>XMnTX%2U');
define('LOGGED_IN_KEY',    'bz[)%/NG6|/>t%Rf%p!^6w[R-,nIx`X$=-E#Y]M{Pc@::iIkz1oQtPd@L,IXU]!k');
define('NONCE_KEY',        'EK$9P-OnVs]#06aW2`l05n%Qjj$i#o?Va|7!9mft)DkViXO.3|[D3eW=Ya`|t-d,');
define('AUTH_SALT',        'o_WkogKfCaJEUg;_*c5B:O-cpSL}sB}AZ@!jjw1vXg #=-/Z|1.Y]0MHh4r1Fr>{');
define('SECURE_AUTH_SALT', '^-g1|?-81jnY/.BLp]s&!XPjCo7ZF.~1ZpWb-6?,n{J{O[@5gmI6:T|eSJAs;inn');
define('LOGGED_IN_SALT',   ']q]SfrTK~9wX[vq*+<VVR2x?zXZYL[Zh7%k6yuw&B+$RA_ /239_wflfpoKNdp}7');
define('NONCE_SALT',       'yx[X^NMT|@I;L7Ik!H_5iZRHhAM=vh_=g~B_98YaN)q-S=o/jvu+Zmm>?!To4>F4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
