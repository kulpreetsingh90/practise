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
define('DB_NAME', 'practise');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'jVI?<^P]~?vm2/,fm(*i5llKBH]VDd5#;/8fm1b_cK[o60pJqu l;jB$kwQ^WEKT');
define('SECURE_AUTH_KEY',  'Z%w@^dY+0#d9[1^gr$qkn<.!R}+2IZJH{IaznmI%y7akQVbv|Gi q9HN_FH175gB');
define('LOGGED_IN_KEY',    'RL_DC(xe8e4o8P1Fj*uw*R[_ErM{8Vs`*Ceq6T$CG[%HtBg(JSGZjL&K4+,uGHkY');
define('NONCE_KEY',        'wv,&* C@*mYSs0*v*wJ%bxS6dO0$An#+b%zfX<SybfT7rv>B5Jg~*XDS]kF17FU5');
define('AUTH_SALT',        ']ls@ZqOEN>qD|0HNg?K^om#:a<?`^q5/Y~}-iwf$gUH:`mm&$F|+tkm5e6+NbtIE');
define('SECURE_AUTH_SALT', 'E9_^^AN`/5$>%~|ml$(|y)LeTV*FoK#Muk1s*;(HYwW{p{8*~thur`)_kV)pRka}');
define('LOGGED_IN_SALT',   'S <G!)|Nd>9n+X![k9]R|<h)mK^IFLVD7W4`/fMw>WB0@SR 4TW%lrUV3gf;Yat0');
define('NONCE_SALT',       'r=YM*/T]91~!7Z5GN<XBuE5N*vwv$41y3 K|e(b;+cG-#=PI]a)V!py`cu8 wM8:');

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
