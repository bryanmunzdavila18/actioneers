<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'actioneersdb' );

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
define( 'AUTH_KEY',         'a@AVW,Gv4}tW?tI[it*%:*Mf[Vw^$ySn{{hCxNmD={X$rUGUAGBOndc}qzUlA4J$' );
define( 'SECURE_AUTH_KEY',  ':9E)f{!S@4_ Dwf>de:ce$rEUGbM^iP&r:Jp$Z&9j/l9cPX6R(=tul*k-]{jsWet' );
define( 'LOGGED_IN_KEY',    '?`Dm]*`BxE5EM Q^qM;u9.PZU~&a:#e@ghyfr<mI97~oRd73y:[EA/o{yP)~qF&V' );
define( 'NONCE_KEY',        'd<kUJT Cq{^8WC^MmjQ?~QjJ(`{|v{dk<ScxRjSO4[i:8t@ZVI{*%4&/$,zCbLr3' );
define( 'AUTH_SALT',        '`6{Za Ee_c!Z#GVXW7WGy)x*42lUSmt2uO:X4QY)xqe+Kw`wK!`h5k@e9pc.wmo:' );
define( 'SECURE_AUTH_SALT', 'iQ/|(W(AJz`6tWL%VY9.sh^V(9cFpz/K[5,p_qjHW.+r82O*rzh)c$8^VuZU3}H5' );
define( 'LOGGED_IN_SALT',   ']SA4~&A/B`BNj`jEBb+9/KS*&0cZ~T^4h-Kd3?wtd6X$3gB!s)N`IcPX46FWE?n1' );
define( 'NONCE_SALT',       'xO&&r*xAcdv%%Lh*p{j>^%(_fusLeqCK(RivIw1oU8U)OX>uT2J+VRO!JqB(_1g>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wpa_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

define('FS_METHOD', 'direct');