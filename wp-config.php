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
define( 'AUTH_KEY',          'o]k#eB!}@@JfB?gXM=jQ Uz-!AAsGDS1Sb#S]~6E~0j@@xj tP:(w.|X*tNqs*h,' );
define( 'SECURE_AUTH_KEY',   ')(V@RgaRvmToP`KjJ1uP!a|w6F-jfa(uDL6ReD-[}c*?yEs+Pdbu^;=AYtyK7kA>' );
define( 'LOGGED_IN_KEY',     'G4V<S@Y<)Ut2A>BT8kGnxD)xUO{7[XwkXwh:R~9AWRr(nx5.M+a<1:b):Zh(z*)3' );
define( 'NONCE_KEY',         ')IIaU3DkU{!rqM@du=<salBLo4#(2 }8}+%h3.^2#epVxxg@6Ms#g[N:yN60U)08' );
define( 'AUTH_SALT',         'Sdft9E3:r_0YGL0^2(imL|F|*Z {T2ZZaeg0;dg[nbwdJJhb5v# YV`IGMIZtSH`' );
define( 'SECURE_AUTH_SALT',  'P6H5!.wFpqh]3>XV0oyQfZ8:R#r^u-t}.etjOG,Ez@NYzkKZVIT;oCd-it`8eN,N' );
define( 'LOGGED_IN_SALT',    '+/]S82EEv&M?V]idC(17tVNp2yJRRwLR+fS~bmg7.hZT7V8f>wLsBrjK<$J9dpfK' );
define( 'NONCE_SALT',        'FX<Q<}f/LB6=*=v+w,B()pw W2]hO YN+:Z!cm!4romU(r-2ZL0YBSA{:Frjig?3' );
define( 'WP_CACHE_KEY_SALT', 'b`C%Kn4M!s$Ti_4(+Y?ogyr3aQ(?nfK+TjBo5Rnq5*PIMdj2WqgD!e0O v-mlA}Y' );


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
