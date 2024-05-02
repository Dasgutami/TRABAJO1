<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'calvete' );

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
define( 'AUTH_KEY',         ']qT_%x#v+#|,(qJht?.h5jsiB^mQO[2:852*hS<I<vYBTW[-CO?Q()qK#~tX3133' );
define( 'SECURE_AUTH_KEY',  '{v}~?fY8rZ0(@nNlf9ZrOAK*M{4Y}iqL0[f&?7%Y$06]v(5bMGo*AY+E~5d/51my' );
define( 'LOGGED_IN_KEY',    'Se{4/Hmw(gTCG?RB%?bSQr&a008i]dD{C`*1^ Q~z1{G*iz^Zc;([$#y(t}?RNw%' );
define( 'NONCE_KEY',        'hfr/`Bc^ED4{}Y<WBE%h{SEhuub#iwiP ,Ip&5iUI^xL$$f_MZ&;e*_%(M:X-ned' );
define( 'AUTH_SALT',        '7jyfYE&7Et5N0vJ]I(U%c6oK%*]c7p2,rl66b*]!~%!rdr6aB:zbhB)TN=$XPQ4#' );
define( 'SECURE_AUTH_SALT', 'osXM&L#[i(t%|[a>@fdQu#dsB,#XPltgw)yb[+Wn$v]iq`Q1_scNs@Xd27(h{&+{' );
define( 'LOGGED_IN_SALT',   '}5[OVI,X*Za}E W.UT0fA-1%DjS, =quk#T{B$EaZ^pN%f,OA@:(PSt8.Q_i&3Bl' );
define( 'NONCE_SALT',       'yRU*dFshEHk6!DKHxoeKf^>tlyd7K:JB6&A:G=s5<^PHYNQr&5u#e32_KCS1;LS@' );

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
