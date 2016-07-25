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
define('DB_NAME', 'playground');

/** MySQL database username */
define('DB_USER', 'homestead');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

/** MySQL hostname */
define('DB_HOST', '192.168.7.7');

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
define('AUTH_KEY',         'u7%zu?_Oo{M==-*4whvPhvo8g!Lu]_W3dxSzJAFy0m*+zg6QaYPw=~SL<owaB)T1');
define('SECURE_AUTH_KEY',  '?dyKpWy,.1`{yfin&L8G,]~vnLcFm_7]lms+-75!C$UM:0O7,1ey.ts-&(rAZNYs');
define('LOGGED_IN_KEY',    'JO]x,xQ_e&(b:KTVRn$9Qi,?7*~C8{Ei#P#+?]2e=pi.s5;5Q(?yc5fQ(pd^6DXX');
define('NONCE_KEY',        '0%IOGxI8d(P`D/0fuYwz<-+oYO9?J4NhKRMyr-)EQU;2$smpn`s!LsT.=6MW:lE/');
define('AUTH_SALT',        'fO1cv$!,~B-#zRg7~b=~G=V,zf}f9)/Q+EHeL_IzJ !u-exQiG9:>Yb?MBOBd<FC');
define('SECURE_AUTH_SALT', 'pv@7YtrvgwZ,u_>~Ak]X6$0`O,?c&c*yznnt?a6Z<7Oe`(&[3:Wo-K4,*vKguqSF');
define('LOGGED_IN_SALT',   'E*,OeX78gt{v`UZMzG2%d-McLg;OG|ygE;{6V1)l=ExRVZgJ1u|i1]sA6~*]=rgm');
define('NONCE_SALT',       'Sr^a&6U*,mGo^J#g5]+Ltf5EF=CmO#ZK#1_jaY@@w<Rug@u7CG/hHk{_ampA^sNA');

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
