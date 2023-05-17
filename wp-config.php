<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'techit' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2ZDx9=nu}ck!8jm#OoDIsre6N$l{<`>^5|eUz=7j7TgpD^xLU%fSo``,[IOqB+;b' );
define( 'SECURE_AUTH_KEY',  'g#J/Py@[+$()07%opbI#StRo3m5GL}b?001f8JDgrNrZSV2nqM&A,XIPiE%%Zh@l' );
define( 'LOGGED_IN_KEY',    'eOaw{AWGwN$_a_/:_Jb96y**Ny,m@%35C`0hAT}xKx{DSI2>gtEIjIy0,b{XLpG*' );
define( 'NONCE_KEY',        'reu0@v/cTX@-9hjl>nVPy6dz-v9:nK#<C8z sxu/-<{dB[@TlFl4W^dJSKG[sM-|' );
define( 'AUTH_SALT',        '}q?#o+0GB]1$jlk*2KTp<-HZgRV^lGf(/-wJ8q6U5_Hn,}9:j[L_}BjeRA$DflRo' );
define( 'SECURE_AUTH_SALT', 'iK5?k/w}7_gFYAkRiaUxX&o <Xw(!/oG3nm|5lFtl4b+C7N.B{/)iuwwc4W;yzw_' );
define( 'LOGGED_IN_SALT',   ',<spwi@@d/4R6<93r4EvP9Y<*#.N]r/o{`8tOkW#>xvESmV86LhZDbklKH<]qCmF' );
define( 'NONCE_SALT',       'SPZpy7t=<<#?t&%GmLau+oa^[^~s<`rj}egyeRp9>,P6imk*aO,j1^tPA>1d6X[N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
