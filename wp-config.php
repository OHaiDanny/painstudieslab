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
define('DB_NAME', 'painstud_wp_r6t4');

/** MySQL database username */
define('DB_USER', 'painstud');

/** MySQL database password */
define('DB_PASSWORD', 'J!f&Ix2)]CK.eH9');

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
define('AUTH_KEY',         '%s}Gi{y;w]0vr8bdil @]+7|HYC#w{|A.8Eq3NKY.}?YS![hoM+<GB&:hCG)]t,J');
define('SECURE_AUTH_KEY',  '2]5vEu4]P};V(!4rOI+MP|z$mkh}Uowk}.tRy,,fJ/ezcG6<E?D=i8DWHdoQQ_Ov');
define('LOGGED_IN_KEY',    '<4~3N9X~=:a[q-^0]hx`]Lm:}[(0b|By09:m4xhF&5FNr54{TNDj*i_!QCB-pT>z');
define('NONCE_KEY',        ')DTd1^y aZ|iG9qY5>{[hEh$uoVBE(1{V-XY2s+]9%]]fL[>UImULM*m%eEi.iHV');
define('AUTH_SALT',        '9jesF&UTDJw,qwY>mwomU(qXWJ=1xie54G:BC-bf=m.!<tsCdllSOb,^RIKzB%?-');
define('SECURE_AUTH_SALT', '>dm{|X=u%&qP{76r!-{yM4f]i2=_Y/m*FhRdMj-8!>OTgh.1,(v|-}?:1i,L8dJ|');
define('LOGGED_IN_SALT',   'br(eN}wN5s~r8k~!8dfZ-V|-6^X5-R&1BW?L,Bt-3-!H[a^I|A+7l:qbx]$+q#9e');
define('NONCE_SALT',       '@Q}Uv=6DQwwIwaKC2?V^fP[NkcQ~ybtt>jc2|^pzHk!G1W)%g?5PP#n2<|V[`qX)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
