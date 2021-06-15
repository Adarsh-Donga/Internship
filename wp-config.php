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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'staff' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'P/`us9_,b)5-O(K@1LCLnV5lyZFt##-WEG[2iz i3gn==)9~>@/;l3w]A48o,^?4' );
define( 'SECURE_AUTH_KEY',  '3suVvH3LG5kCsX&+x*Ym78Ru9(x!t+Jd%QV+>|`N 3P<4jdex _k]Gf)GV9}t=.#' );
define( 'LOGGED_IN_KEY',    'i9.@^qq2f73_`(W-xw0K6$M=:T>`SP#t9vZ1om&Knl(D/U*zeCAF@0q500y|SS^P' );
define( 'NONCE_KEY',        'hCukRUov;5Rng_jB<{kPmaDa&s+>8h_rLYS[{ucU.{jUPBjIJ3{w7@^ *N70{i*O' );
define( 'AUTH_SALT',        '#31nD0fh=kp}W!TflgE;;hNjZV)0,yfyKJieBg,-FNxA!LD~:eK#^O(@ZTjQOr%s' );
define( 'SECURE_AUTH_SALT', '.J@V[X?rgY.l~9@qt>|/q{0s)hbtXg#9KNcWQb1CCL#BVbK>iPWW1u8ylwSvAFvw' );
define( 'LOGGED_IN_SALT',   'r^DErj,CsM+U1&!r},}<DH3E/j#jU$DsDmrN9c)(YF2T!zKClv/4B7RidI9Ypt|$' );
define( 'NONCE_SALT',       '?EiN)%+rNsG|%)@wrPsdSCt!^ 8l@%*CIo.u+P;73?3>|HaHI2maCZUx=`nTF}xz' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
