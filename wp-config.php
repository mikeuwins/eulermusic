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
define('DB_NAME', 'eulermusic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '}IU6TuvnEp5urfbK(3e^k:>^lUcNWhG)oqgKea{~Y.[ FdRvmj.lQsO3^V?AzYQZ');
define('SECURE_AUTH_KEY',  '-FfwNHO |e5I^|#6~DeHX&1RBiR.E|9E<x1pi%l|s}+!OkQD)z4?:uIF$#]?2f&[');
define('LOGGED_IN_KEY',    'pTd|mZy84Ul=-_?J8oK#r|h#Vb)V6d-g[]T>?G,W;+x;({u(HW|uv}C,pHn[i+$Q');
define('NONCE_KEY',        'F:HT`|@T7_(=&zVv2VA n<q-,+qo,w1Xg<V+B5c67_+EtHbFWk;Vu/7}P|Y_ ^NI');
define('AUTH_SALT',        'xSk_1cf+G||(L1!<X|xr|-,]kxSSFm:O|q;zkn8E;wq^]2-a&3MX@`(-%80/#mS^');
define('SECURE_AUTH_SALT', '-dahc3ikRE{VCt-y&Zg~@X RIHZ;Ca 04(JM6tZ&5s)PRh%8ycxmD*:.GUD^ZgIK');
define('LOGGED_IN_SALT',   'xnpot(Q7.owa<WRVBeweUt=tLDUv`%*v+[:jIAa.|v`dQ5//?+Lq*`kU6gX|;{81');
define('NONCE_SALT',       'aOb89GHXRVS9kh3kVpm=~kI=X<XUM)|+B&%4rEgpT3U9>Pz}(njY4K]pnwQKv0IC');

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
