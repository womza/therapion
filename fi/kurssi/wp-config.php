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
define('DB_NAME', 'therapio_fi_kurssi');

/** MySQL database username */
define('DB_USER', 'therapio_fi');

/** MySQL database password */
define('DB_PASSWORD', 'kurssi_fi');

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
define('AUTH_KEY',         'avD}yg}5JLS =kN?]B-mPa7V&>ZzDfJ+oeadM-!pv-:O}+:?|9|jN{V<AI*?|Knh');
define('SECURE_AUTH_KEY',  '/;?e]?/c|4-Ew*x#_qe%~94y4pW%m[vuS<~eEZ^azy@51)J,7kl59z&@|7)g+C|n');
define('LOGGED_IN_KEY',    'ur[,N@}={7_M&J]=F/2jx;40ptS[/ AhJP)}Nma^7;{KZ=@q+ c-U7i6GnW#F-,D');
define('NONCE_KEY',        '44z1U+Q}$#cr{;du-rJ[mHMZU^uw-|uzbSfjby?JK4>e|,SXY9J-Nn7fh[1rFVPz');
define('AUTH_SALT',        'K-$d5<d9|e8J5WDxQECDKw1NW,|0<@l0<(CLp(;TYi4$UIfLX<N~+>kG~R6g?Zmh');
define('SECURE_AUTH_SALT', '+Lz[kUB4B7f!b;DtteJ4>qVXKDuZV)/9+^@9y;7e|Yvd} nU)2a}05qj$Bz&}2:^');
define('LOGGED_IN_SALT',   'f7~;7QQ(uGlEka 7:MKq;[,{KRx]2xnmC?mq;^EAui#c6(6L,cLQ&xG5h:.|#6}}');
define('NONCE_SALT',       'D2{bnk)Mq]u4?HLh?rR.6I< ^$bnt+:-d!E0ZTccpL>z0E.B?Gcb82d%[}+K^*Xa');

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
