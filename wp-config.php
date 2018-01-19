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

// ** Read MySQL service properties from _ENV['VCAP_SERVICES']
$services = json_decode($_ENV['VCAP_SERVICES'], true);
$service = $services['cleardb'][0];  // pick the first MySQL service

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $service['credentials']['name']);

/** MySQL database username */
define('DB_USER', $service['credentials']['username']);

/** MySQL database password */
define('DB_PASSWORD', $service['credentials']['password']);

/** MySQL hostname */
define('DB_HOST', $service['credentials']['hostname'] . ':' . $service['credentials']['port']);

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
define('AUTH_KEY',         'W:i+YO>i}l? tJ:M~xnxQbs9^G0F|m.NGu?s/iI@Kx.bpg`mDYMJ,b2*YTC/F+O9');
define('SECURE_AUTH_KEY',  '_2Mv}=hHeie#FEto 8[FB^S0TnE_@jE*#2PWo}8q; KLE4Glp|%!7AVn%k-KU3YM');
define('LOGGED_IN_KEY',    ':+{}wcgTvWnVh<Q?N?YaE|n7v*V%&Mp--~Tqkql:-+bZ8tgD!FIp`%8+.D6A|TMy');
define('NONCE_KEY',        'd5$G84|IWbqc<I%M.j+f$blW|$|yys0pk:9hb_6[f*XydiK~H=L=}- kWV%*5lev');
define('AUTH_SALT',        ';+|=HK{5E+oN.7ih>!q+/9/rFje!V`MfgCRU`6sM5tTC4hwKvnh|ITDNLTe+c=,o');
define('SECURE_AUTH_SALT', 'p1o*I}k[@)o`L0 yOEqJ,vzV3I{%KTeyghw?f_KR}(V)vS@NH~Ozl2)r^?;9 V3V');
define('LOGGED_IN_SALT',   '6&zY3)Rn:I$;v+tGN-o<Z.3O9[u(Z*r`Z>R/t7m2PjaBoKOfo -jv=zt)@{:bL{o');
define('NONCE_SALT',       'BW<cYrvXK|qh+xh(+~UwK+9uH(^JUYl_bYN4;J:_TXRY-~-7+W/N+/KU/YF!kwTf');

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
