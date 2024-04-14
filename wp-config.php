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
define( 'DB_NAME', 'treefort' );

/** Database username */
define( 'DB_USER', 'dylan_admin' );

/** Database password */
define( 'DB_PASSWORD', 'shiva' );

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
define( 'AUTH_KEY',         'Q#H1lX_0SP1+ANxvs&_x?H|&nna0w[RxLQFk-VAxsbt%`]_Sf/qFG`A`4U:J&>Ow' );
define( 'SECURE_AUTH_KEY',  ',e4H.a9!eClO6@-yCV%*M&W.Jo/G7/Hl{us?{VPrZ ]q3r~7$Lix<VRwNi2dv[)E' );
define( 'LOGGED_IN_KEY',    'd:4Z5i2UXH/[_jiYPk][ sp=@c}$o(kjU<<w1B2}[<0*:t$X22FEy`u[5>UZz%,u' );
define( 'NONCE_KEY',        'F}Wgt?O!T?_,b ~jrfY/MD_yL$y)QD(%/zK)<RFqu1jM+/QCZe>BN8!EP7sIgr2F' );
define( 'AUTH_SALT',        'ob:WyM, Yk;,BySL1=D _k4ow)v}XI(!@E?/R)uE?g(FOB6@>Lg|iytk1l;JzLPH' );
define( 'SECURE_AUTH_SALT', 'vWJkZsSA}4H;ii),4|L*@X?la.k@&~u3Jx`3R_CPG9k,E@(z xg*,6WEu>^mtgF1' );
define( 'LOGGED_IN_SALT',   '?:pwP!g:P&3]LzEA.uAI8s$`25nI7QMJH`lWJ6aW4!3{S((ikR{*K,zV)YOxvq2}' );
define( 'NONCE_SALT',       'ZK[wS:GT/9KR-;k1X{O]x`5(Go1K}N~1zXD]}k*T=[M0cDOidshxxh^| R3K`3d9' );

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
