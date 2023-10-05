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
define( 'DB_NAME', 'ExterneWordpress' );

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
define( 'AUTH_KEY',         'hdq,T<P%.Ub Y80L~gkxSj7IvAxUCq:=c}wk3l2MJ*1+P=s&TY+K-mw.Ti}R/%*{' );
define( 'SECURE_AUTH_KEY',  'KS. m<[Q:^)F9babh$bfC=mWy4&^af RyRO<o1)21t ZE0L1kySParWd qe=R,ua' );
define( 'LOGGED_IN_KEY',    'I@ucKF#x$|e8+uQ)F7[34^kH-$&DP;&Ry{`7?u`B=ph^.9JZu0&DrM]u,;;{;-p~' );
define( 'NONCE_KEY',        'Pf&<FMjx-Ds!:*|t2WoHU@(kr~OkR4TV6ZwLd5rW00(!|K6iCmmP:RxJyc&0ak/q' );
define( 'AUTH_SALT',        '<I]mJjVF5DKat62/NJg|YOp|sU2Wgt04D,;YpT3<36kYMGs~1epyPBixPSz(tg#I' );
define( 'SECURE_AUTH_SALT', '7RA5A]IT5%v;oT8-`gRq&:@!tKZ6WS)YKF<KUa<EL!(vq8Rvl$=o9Q#)QUwyDvg ' );
define( 'LOGGED_IN_SALT',   'RQuDPEl85+NottBXn4giYtJ_)#Mn$#;s7sS?Q)F+vsO-a=,NRg-:/N~1<@X~lqAY' );
define( 'NONCE_SALT',       'U:%j(ON`|#}VSx;2,qH# $G;!%;7}]#xDQ4B?5JY22g.A<Axy?kUqhdv77c8w)v%' );

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
