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
define( 'AUTH_KEY',          'MKG L5uq]9M<]U^C+-@I9B3(I|hn~Vkq&yRU_Y@q)s|1iZYvRz:^rKEI0nE`LZ{M' );
define( 'SECURE_AUTH_KEY',   '?9A}7yKg`M}(O}{TS&_}klhM] zS*}e(u2M9,]9rq?cYG;}h1-m`T@jBZU+h5)$B' );
define( 'LOGGED_IN_KEY',     'd>QlB1$_c.X4UM=T1 +6XuOH*}&?)I)plY X78_n=|bYas*lj0 Tjk^g/Ijd(Er ' );
define( 'NONCE_KEY',         '!NM-3)Y:X3Ag9DsuQJ7.;@,6vn7C+CV2kh<Up~VC|{K.{ ~LkAc1A$:2c*H>D4;.' );
define( 'AUTH_SALT',         '7=OL$cj>5~Zdfj$&K]rS9zdHAH~;uER(_yX@c1 /T,4Z+!;hKoZ]A/7BTvTF8P t' );
define( 'SECURE_AUTH_SALT',  '1GB4_1S4`yV h._ye])HHs]KoK-R% l8X`%D&dG,Usj@F432Z: VFz-KB{g+kJKz' );
define( 'LOGGED_IN_SALT',    '1{F@h#21bf&GW1nr84![T0)ro9gsw}k.SsrUV)iID}`w;$s,IVY9%O8r@}+A,Uhq' );
define( 'NONCE_SALT',        'K{-QBn>T)6>n4fG$Bi_DeJZB{*[5FrRnpc.tnl)QUzBo:Y!a5Zv`l$&gAQ5(7N}i' );
define( 'WP_CACHE_KEY_SALT', 'l_q@)AFF$*viA;?XaQ19z,wY[Ur>/n|L+tJUw3V=<|GnONe,J_Vqw49SMmd^_, ;' );


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
