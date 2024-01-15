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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '_Ha1uWi>k-S8`@:?%e[R9_}cl.4A~Mbb&&|D`-wbm.]XcJYgk(F`b(j~lEoY@}kN' );
define( 'SECURE_AUTH_KEY',   ';;F7Ebu4Zz8G=Wb4}FJ>!zK>i?bJ6&8HwIFW@oaZ?~O`-o$P&|AQjnW:[Cd+q6wS' );
define( 'LOGGED_IN_KEY',     ':^.MZ}`7J#[$1(sGB445|#L(:Yu*23u,ZLvM9OB*i@6Q<MQM[cHV/dbsP9|?D+GO' );
define( 'NONCE_KEY',         'x .&Jj{M-BTl^i(7C7~/vg/[)~DmVjZMw[W5Ua&a_8_h&bBg)pTHmE^a2Q;NJL9m' );
define( 'AUTH_SALT',         '?^4[El(P<NWx_h*IQkxW[@ I+@O&Y`sE%Fo!tjINc/*C&MV<[>N=2?7=B59O{3NT' );
define( 'SECURE_AUTH_SALT',  '^aQlwgZU6}4D5t,NfSfwA1MC*>g+v^2.Gj+=jKb0j3au-78lce7=+k}rQ8=Y7W,%' );
define( 'LOGGED_IN_SALT',    '!O{x#H}f9mk=uuXp3[_]{j}{@18Z_i)}Bhw-#-!^z0, =.llvep6._iPPm?lO$ ]' );
define( 'NONCE_SALT',        'r&)wV>dC2~1W/ujf~e$g#]m@$1WpCzYPLBJVm>Aa{nwg*ifqJ;ZHeYK@^]7~g3wW' );
define( 'WP_CACHE_KEY_SALT', ']69M>{|g*U`9Cb)zPWh/D}7UHO&?G^Kn=ka9yNDG`C=.{^GB*c`ub~$ltta=W)<w' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
