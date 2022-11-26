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
define( 'DB_NAME', 'profile' );

/** Database username */
define( 'DB_USER', 'chethan' );

/** Database password */
define( 'DB_PASSWORD', '17071998Gc!12' );

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
define( 'AUTH_KEY',         'Mdb<DJs-IM];AqHqhEqS688cPj%J&[|&+,xjf> WlQ9t1|:-r>T`aXePSffu*~Y|' );
define( 'SECURE_AUTH_KEY',  '++4])_bg|C-)(h%]tTNP}-|*-HH3p+H$n~e;TB=-#biZ]O|B!QlU0eC9PN.`w6Y}' );
define( 'LOGGED_IN_KEY',    '0=SZ>rs#<On[tRUulXqwtC[8NPjSX{8RXV.ft5M{{4;GZj_w3*n@;xpIE7xXorS8' );
define( 'NONCE_KEY',        'O2p]g]pzH<j4ab9kr>@O9kU/+)0Gr+?rsnk_J[wx(qrC:SW0>X@cTO.|L%rYnqs@' );
define( 'AUTH_SALT',        '9:WR9Vg4I5M>N+SM&dfqVb{rxtUI%!|N]![j5}o,::fBJQ#kIEve(^2r#nJNxL42' );
define( 'SECURE_AUTH_SALT', '-|gW!xjLGa->f}e7_@FDZWN[inlFX![|oC@mh9/?cZ4K~>8st[WURSG{4J8&}!z@' );
define( 'LOGGED_IN_SALT',   'J1$a@kyN_jMNbi}5w5-rWG:y#Fg6GT_qT218<Ic4XvKZ%O}.+M4c~y-c8Yd1.0[E' );
define( 'NONCE_SALT',       'Du=j`kq1wt2rz{6f/x@zF.J,ITN@sX9br -65K8m3KP0=c8Y-=`p2:j6n<O5vE7G' );

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
