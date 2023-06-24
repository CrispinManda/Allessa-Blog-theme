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
define( 'DB_NAME', 'Allessa' );

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
define( 'AUTH_KEY',         ']#RfvjBC|<I_T_ga-mQP<@#ffvp#eWIE7 ;&^wGp[<<!{P8TjUYCD*)(,>>Rl&H}' );
define( 'SECURE_AUTH_KEY',  '(5Q8e{-Q|u?&SoHq&w4 xf*M{2,ps /$#_#>!1q!Z7}]3||U]cQn1ht>=]b?6q>8' );
define( 'LOGGED_IN_KEY',    'Y};:&F?V1h:dW62aJJ,;B2t1Xz(N&B?Eyp/}TA}|c3&dT#ojx&6./Aw#3~?/chhH' );
define( 'NONCE_KEY',        '42mAO^qX>SEa`ybN2D3`IJ}56=|$~[|:JVKZBp`]#wkHK2Ovv~%>2OSzAYd@DJN%' );
define( 'AUTH_SALT',        'c6%f^5zQ+QWWskg(G`PwOMPB]?AhP/50QU<&JDe h)t~+NA D@hHjCi*H<9HaImo' );
define( 'SECURE_AUTH_SALT', '+qLVc`;7}*!{&$O1)ktVrVS%){mT `D+5J!p#s~{7S#tN|$iazvm5!B~5DNCsQI+' );
define( 'LOGGED_IN_SALT',   '6i{MX-MHv-A%z.vygUzu$h9`<G(6NsQ_7%yl 4,2oeMkcH4~&vPsF>M=>3xO+Cy[' );
define( 'NONCE_SALT',       'E|vg#-}q&>EW/>TW!-1#`j3aUCCzjhFr2<OkrBO=v@3?iZuN:(Tc_L[d{AQVZ/TR' );

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
