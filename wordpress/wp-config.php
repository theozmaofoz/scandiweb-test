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
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'michal' );

/** Database password */
define( 'DB_PASSWORD', 'michal' );

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
define( 'AUTH_KEY',         '82vz.=eq!_Bx]w$Y oIl;e_Vy(q^aFOzeeRvaTd;xS&hp]9,4Q4i%;VGCfs^+c-5' );
define( 'SECURE_AUTH_KEY',  '-Oqnl_3.DRl.z2I?JnFPvmvNL/t0G6=vu0daOK.[,`.}G381S7`(Dud6y]RCLv@w' );
define( 'LOGGED_IN_KEY',    '5rv8PBKs2|%mUO}`p_z+C6_+2TWR7nimT&KYZ=t~-]dV7GVpLPPPcP8yLLx.z`Ws' );
define( 'NONCE_KEY',        'r)+H><*#OL+dv6,O^{o1y*E,S=fpvwCK5eG2n)AlW+6Jp7E++fPp243h V|~=>A ' );
define( 'AUTH_SALT',        '(cNa0x6W[VjeY_PiHwhhwt~Ql^(LHI9grb5[[N#aXD[A[Q^[P_C.O-8?=:CFXA%G' );
define( 'SECURE_AUTH_SALT', '`i@IUSfH,r@1DYFdxWIqnV5Q1+|Gv%`W|Xs0=vgrcdUggF/}Vt? `Z5T_%0hV9=D' );
define( 'LOGGED_IN_SALT',   'v$<NDnln.w40)sr5iVX)l>a-8DOWf1f5//ECz9x~%Nj$Uh&<iN<)iAoteq_oxgi9' );
define( 'NONCE_SALT',       '.u=)arEGK?9!stpFlA0?g(yk:VrdMynRjv!e=r1NUjmF1wMO*v)B$)>q3JXposHn' );

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
