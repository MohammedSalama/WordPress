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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'route_learning' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'LaKiVe2qveI8YmHI%@v+E6b31?[c+F&k+i.twEq. j7a%r[ HP:4gG?b{)[|hW!u' );
define( 'SECURE_AUTH_KEY',  '.kc=V!]-&42N]JPZ(>Y54tL*59da^?[1x:G^+E%ltTgkQ>2&U2br*r#2knu]1VIM' );
define( 'LOGGED_IN_KEY',    'r&ui=L{&Z.[@GlG>5*_w^`LYuXfnXtDoOP`IE[<-q(OiM1%D,jh$*2Zi$e7OV?EO' );
define( 'NONCE_KEY',        'j {zoXY67oo)E-{38VmD]Ljp?|VXk2TG uX0n-[WxX`h@_S}ikjivO6vtv@k5>Yu' );
define( 'AUTH_SALT',        'iwgg=7m-9JIX*cP@lQ|u6iiHb;4^w.f}:|h_@#k@vHu/DYrlYu^aR`1u1~N6Y/T?' );
define( 'SECURE_AUTH_SALT', 'H?S%^/;rL/h}LM=Az&bQH]}o)a16bs!15P!uaOV]3BJk@z7n|TVHj(XByGWV5LSZ' );
define( 'LOGGED_IN_SALT',   'km.rL?S~_i_P,kW0s*j]X%<:{qF~=2*;XeF[Ef<T.}?o2.8xmNhGsb_sqZpYOa #' );
define( 'NONCE_SALT',       'p@,-]?,% F_b|pAhLZx@GF!3G%1SUz+(P>_* jjOkDP(@>d-NfB[rt<s3[{QoSt.' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
