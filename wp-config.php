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
define( 'DB_NAME', 'lancenter' );

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
define( 'AUTH_KEY',         'Q*~;8HFu<*i6xbZu_9cw^f[j`Bm!KXA8V,7Hs7A+D%@JYJf}$YYDBuNoSs%P_pl|' );
define( 'SECURE_AUTH_KEY',  'WUKQ|(7u]k(u4,$/_Yf2To/tCUaN%~dcl26eCivt#cMn|~WHirC`B&T+&di9u+Sv' );
define( 'LOGGED_IN_KEY',    'WC|~YU@|TW:eI^Plh;cCJy%Q}Z9deJ2QA2J91/q;*?S&BTR7&LO.`[9GFcM.TmQp' );
define( 'NONCE_KEY',        'E7QZLF2!yG~q{#o,F.5}m$G-&;%}r8ZDE}A<-.NHg$,]-AfO]Ff; f2{59$=VZd4' );
define( 'AUTH_SALT',        'rD_[%/2oq(d3G`2,1>?id(y)sZ`^{,IKC_z1;5`j3.7]]jSCN*!w}P>gdnrZ*fJu' );
define( 'SECURE_AUTH_SALT', '983_}Q&Mm#ODb-f+(}l>Biq0(%Yq$hToTA>}&ahH0Se}L4I[~Y9A)F-~sKDC=#Bg' );
define( 'LOGGED_IN_SALT',   'xr4I7l*0.~viDaQAQe! JO%S+Wa0P4+HM#DZ)Z<P}u<808tCR+qivbum[CU3h>e{' );
define( 'NONCE_SALT',       '81SvcR_z^C<Mae0;1Aa{VboaN3Oc1+z9sSjti5]ai7&9X3DZN+r3-PW10&7.tZgx' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lp_';

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
