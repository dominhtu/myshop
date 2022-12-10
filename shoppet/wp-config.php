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
define( 'DB_NAME', 'shoppet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:8080' );

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
define( 'AUTH_KEY',         'gMXn/?x78z5^!z!C#lmVKE|iN[_xObp.,2wwF0v}&K l]@ UY>f]gPS9p8s`L1<l' );
define( 'SECURE_AUTH_KEY',  't-vFvktj{)Nv}fZF<X4+uc4fiS[?$y1+8E$UYo9L$zu} /^^7G``#R=k/wVINZ]9' );
define( 'LOGGED_IN_KEY',    ']%9_x4h=P[Don~M06U~}lw/bT_>z|}5e(u>o+xFRjl~m%:ZkqzXOC5CCS)>TaT5R' );
define( 'NONCE_KEY',        'TL.d;AJB2K9z3`?9Q|Bt>:w(0c@naxJkuW$[$U[exXc]$RAEsUqWY0sidIERIsNp' );
define( 'AUTH_SALT',        '(E6OzXjnT.%t`(d!)3do0YlgX|4^KK{v8*0Ym8kYOf[qutPv{1~BpipQlSR<;g1d' );
define( 'SECURE_AUTH_SALT', 'S9>u5VpKeK:MF7vr0~O2(4{~iEgnc<G}C{+Z`g6m]mo$6>?cB&o r {neDEl8>bJ' );
define( 'LOGGED_IN_SALT',   'hr:f0%joxW^<>AS=a?i)]ZV(hvrQjl;]5<jhc:RSlVaJ@@{VP7If<_Y1^<*pnB/#' );
define( 'NONCE_SALT',       '/9xe<`s/q%e5f&KK/qRc7?Y>6pR7|H7R>TN.#?^N`!E>8<9)uU S%0Z+1QgX`H`M' );

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