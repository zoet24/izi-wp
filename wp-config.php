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
define( 'DB_NAME', 'zoepix_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
// define( 'DB_HOST', '127.0.0.1:3306' );

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
define( 'AUTH_KEY',         '$7j4K0]sA*p~*vSM~~Q;~uS<?.8]>/-(spyMhPoP;/rtsGglrOa^zoDH+DrZmk::' );
define( 'SECURE_AUTH_KEY',  '$@P`Dy__.,wIMdsgsI DhrjMJ)C]RoHH4taCFy`J&g}xO.O<FaoUW(MvnE+?QT!4' );
define( 'LOGGED_IN_KEY',    '_1.p7Ju3}C=$nxC0|.rA0Yrt-V0A~c{!5WS`,y{%vW^AXnJ<RkRt?~cCF[+`zSr{' );
define( 'NONCE_KEY',        'DK[eMi634/D*g{<zX~VJXFx@X-gmWc]HMEd{w(*0/ekg[tPXuo!csx+kXEtd@.(*' );
define( 'AUTH_SALT',        'jAG& XbHJ8h^YV|6!Ba!5Sr}I8le7#p=FUD g_c}uhaJc)!g>k`|8gmI|GX,0s*}' );
define( 'SECURE_AUTH_SALT', 'N/aP[iMK`.6iZHh%81X~lh-V92*2*y9.ep_W6XkAIAX:ZqPn=$Ke0+b}m#_71gry' );
define( 'LOGGED_IN_SALT',   ',bT*LRQNeau?GPjB3T|a3#1,xcg$t,przI(?4wT%UM0z}3AH&|82EI4qFNFtmM}S' );
define( 'NONCE_SALT',       '@TW,zC<8eLNo21=BtNr}|nEu)g? j|yWev!dA|yps/T2fWi,&3L^<o*`lTA[l6Oj' );

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
