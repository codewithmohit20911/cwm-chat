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
define( 'DB_NAME', 'cwmchat_db' );

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
define( 'AUTH_KEY',         '!.pDd3Ly{Zk^}yjZHCh<SykxbCkYAK6QdM[n10AA92xSLghk)tL?eeY)m{kn&%A%' );
define( 'SECURE_AUTH_KEY',  'P6Mo`M5v@t:s?z17+*KB=%17|w.H.DE6A8J@3<]$bPN}GwX(#hfhe1GGqsqx,`8M' );
define( 'LOGGED_IN_KEY',    'N%0pq/RwopJ[ZD%pTdMrAo%:Sp}ao9`fM8$@to)w/Fa#ii3WYYM.J1.KGBjZ[8>C' );
define( 'NONCE_KEY',        '!1&73I*Y]{>o;0G<O0:Y8[A4^I,<N{BER y6%kTK@!;)+6$OE;1I2LH^g1[%w.90' );
define( 'AUTH_SALT',        ',LjxNI5D/yaX*n{?u2.!S_Kb#76|Sx/hS6]+{6U<n~Cvi|v8D{X8`>8.I=D?M<vS' );
define( 'SECURE_AUTH_SALT', '/U5XCc-d5pfczf~+;N3p>h.mHW iSWgN9sSPw_I`MWvZZD=(F3R~e8EChPsVqG=_' );
define( 'LOGGED_IN_SALT',   'kq>s42`5E2ofkJ1)CWt3rM[8J>df9A cXL9*} myt.?-a9E9O!v7&H+o?zrq62>G' );
define( 'NONCE_SALT',       '2DUnib{_5OM{FqE,[Iw@KP=LdR>Tpfi7[/[Ut{$8/E$jI`Mr _0s0<}*R85h]%-6' );

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
