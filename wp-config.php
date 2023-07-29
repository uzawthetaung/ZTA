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
define( 'DB_NAME', 'zta' );

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
define( 'AUTH_KEY',         '7Ar}Y-m@l],V;9crtcI0UmAK>&M>7+Y(|)fg]9{n@([lSH7U+Xy>mJss8p8Fy=2g' );
define( 'SECURE_AUTH_KEY',  '&[7@Xxh=D48(kg|Jk2:SLzT*45*B#+_b{_9ISXQ.}G=ASs7/dVpMcXvL2kJ+F2~Q' );
define( 'LOGGED_IN_KEY',    'H+0^YvZ$FqV@Y~s[.7KYMs!:N24C92l&d9ZoY]nvel3eIZ&^e;de2$4iYq!W:HZ1' );
define( 'NONCE_KEY',        '{-@+]8f16Q>vu50[493**>,dEOAL_zk0Ft#Ua{aAh!}J-hU5Jk-6+I_j+Iy%].@l' );
define( 'AUTH_SALT',        '>x[^2s8{+J6k|k_JEp.VbQ;fZ@lS#Y(5}O^.%KhG9Xr8K<fAWcS)cbE001G`>^*-' );
define( 'SECURE_AUTH_SALT', 'yp KN~ 5+:gcIPHN?.e~Ik><lO2DANi&rSN$6pWU GkWb.AlHdo}Q);#xpnEjgrf' );
define( 'LOGGED_IN_SALT',   '(]t+#1~wjHTy3b3?Xbovz;ko3PV(<@F?4!uWB3x$Q %5lh.V-7n92A~eT6>~nrTp' );
define( 'NONCE_SALT',       '7pT/{xINQHBsh}Xr!$KlkA087`*]pm?&PJ_uCrBXcg/=_5Ab,{_b_pnU3@i.xnAM' );

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
