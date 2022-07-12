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
define( 'DB_NAME', 'hotel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '$Mariquita1911' );

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
define( 'AUTH_KEY',         ')zJA5)QG`11NE,Y& v]q2=p{$4rV_feE=YM>0.z>HRv?:$^+TX}[f1rm6aH3A:c@' );
define( 'SECURE_AUTH_KEY',  'fFYLdT=R)jIy-2&=4gG&*nk0_r{QmzCRpVR`;|ca&oe,0w~@A8?.V$1<F5ovI%A8' );
define( 'LOGGED_IN_KEY',    'h*IATf@&X{[EPpM`RhZ&No(h];p#3OKlScIV@SABhG)=jMzZq&+q+H)szF6Rtrp#' );
define( 'NONCE_KEY',        ',4Q8]UAfnCz@Z:rmvg2GQB*91cg}y@HcVs2zIFdl,kb%O[Gth{_xuF2.y`>$Bx@E' );
define( 'AUTH_SALT',        'OZTHg=fV=`&*4ND(=Or&r}`O$f3{1~]jPlF7hQg6!.CHs>O6@53GR}4-/>@sb2BG' );
define( 'SECURE_AUTH_SALT', ':IzngCf!R5KgiT_6H|`iQ|xnj9nrcw^T[S,.z!C46c?ztg4HV[ gzSLt):lH$`.e' );
define( 'LOGGED_IN_SALT',   'r=#_*YL[6rL*qm*09GpaCu#ru1N+%RMPrX1PZp8AM<n4_);5gY?Ld@a*Ph[oaAwQ' );
define( 'NONCE_SALT',       '~/TD5<CwT8Z%u8J`;AQw/S5A!w[Bh$;hWt/pW!8U@?TDp{NY]subxE_QX#z9%|eb' );

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
