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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '!`nwli9+/x${Dm%mn:Ks L&)]a9yRA%!||1Wg4Uxw}W3tHPZN4^T^?*t(.Ya;5pZ');
define('SECURE_AUTH_KEY',  'HFc(L-`28@q}p6g#,h[8KS#jWpmxO]X=1Q;AH%)mFCL||P3@kHH.dLoCEe^f%Zu3');
define('LOGGED_IN_KEY',    '!@;.wJf[]>nloHg=czSoX,g&+cX9{0/Gv}rMWaAaPIf5}0%HF!gJ]t=)!0*H#/%z');
define('NONCE_KEY',        '$1J(,CBBw51]+FLOpK*_U3s/pli}&8M@uB4RQ4A~-<S8Y]z={j=_V|<]|Vq;czik');
define('AUTH_SALT',        'xm.k@/t(G0]_.I;-(eXX#<9^]>=%7Sa9;U8f]Xys;B_sL/&p#S@5hIPclR*/r@9K');
define('SECURE_AUTH_SALT', '?h?{GCKIe=n+QF`.8Dk[lwXoNGvz%LX(ZN0As2z19nAHRl+k/@}k^2Uy2,H{YWwq');
define('LOGGED_IN_SALT',   'h,Qe{){0:)<{<<|&?Rj;Ct`9v;)Zey0H%?PxyOniosl&V[3xt-oc~Pmh@IN-vY9!');
define('NONCE_SALT',       '^8O3eP/:0qM!0[!7qym|)VC?^0TjKl<~IlVhSLF@zhQ[wi /6QE3}~UW%R&PBW1k');

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
