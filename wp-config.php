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
define( 'DB_NAME', 'chat_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '!]!F8L:1FJci@QmGUsV:md3[Ds}Cdy)W<c$auK85;F-T-f$w29]l{+ck!fCa9J)u' );
define( 'SECURE_AUTH_KEY',  'rb g3f@Vt.xWGY_`Cdw1-e#^w5D0Xw]Mb#ToN<{Oo]DlT{/]j>j8[/3N~Lp#+d=N' );
define( 'LOGGED_IN_KEY',    '~i)f_G~?vsj;`gmfSl*:/*j/1PJ}($RG/v-E)ki>A7MD0dM4Q]X(mfP^qq^d<KV^' );
define( 'NONCE_KEY',        'NhE<*fO&.SD?6!2_sg}}IS2~a`p.?M<jHH-4V;ah?.K&2w*d.I$2AUt}z2wVivwj' );
define( 'AUTH_SALT',        'tO2~!VPu>t3e5=6NdCs&|;+?k,=wJ(7@`D!=-)G= Y[PCx&G1|>8]XPyTH+yCK%4' );
define( 'SECURE_AUTH_SALT', 'v81C-E7l`Y4&zt%x{|y99qWPBR,F>ys_x;VY5UwLcnyUxoVy1/d4N0lWL6_B 0<I' );
define( 'LOGGED_IN_SALT',   ']Y!o=0|i/f)PTLAX!r6Y6n]YJT}1Kk4G`h`.@3G!{69I(^/;aFi8r}y<%Qj~5fQT' );
define( 'NONCE_SALT',       'DVz`c#IeMx@;Zd%k@Zow;N?Ec@/3Fn/$Xxx,Y2;mtYA*&O^U`Ko}0SG/:zeP8vBu' );

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
