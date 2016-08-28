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
define('DB_NAME', 'miob');

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
define('AUTH_KEY',         '92$wU/AuA_!MRPPD5DdcHD4@:WUg4=Pm-1V~Qt2)M]lLhy q=znj5d4Qe9/xf0kM');
define('SECURE_AUTH_KEY',  'SP{?E.5Xb+vwF2nnCc1/NRbI9;DvXJ97o`otajvF0G|s/OJO4(Y6{0?X5=FnhsLi');
define('LOGGED_IN_KEY',    'jYsR1;da>~.C~t>9epXq:w@n[Sf Q+Q{n6m(_d=x})kd8Z:H}} ZB/8.U8p|q@Tx');
define('NONCE_KEY',        'ZmsVf]<IPf-zqb7k%|JO+P1C85mVv8+*~Q,d1YPX:O4!40M:|GCYK7CAZ}AKPy~.');
define('AUTH_SALT',        'sH0E=W>(r]BxWk>grg{X0wtkvslCHM`%=Lwx/5p 92Ehea`F%XGVqDp?n;T@QR+T');
define('SECURE_AUTH_SALT', 'uI_W6?~Z<aa<Q<6;kp=.&;M!3ves;O&Z_?MsH}m3_#/67mp^6X^}?J/tW&NRYZm<');
define('LOGGED_IN_SALT',   'b)G)qtUh d.qV93&kSDwkE8]OIEp+0$mQIB-ZGJ-rDnu;%F&=rQie=OU8aTs<C3Z');
define('NONCE_SALT',       '`lsfR%bpD,Ppr3aJx3!@F~l@r|]{iR|TX<7-soQiS|F*1A&5mw}cjVQY(e++w4tJ');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
