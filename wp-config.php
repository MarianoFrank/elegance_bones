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
define( 'DB_NAME', 'wpelegancebones' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R;(mdZ|R0b`Gw,pZt1<<1P00&SzKr[$?vpnmV+!:K{p<qpCZzcGVEOeKkz%8&:m!' );
define( 'SECURE_AUTH_KEY',  'mXi[@X,Pj3g=81erc:1Dgx(>DX+%Vx>yoP0h+d<WvB$vn>vZQ@{&T=~Q}Lv9Lu9-' );
define( 'LOGGED_IN_KEY',    'FF*j)_B~|y^YCt]N`U9kZ6K@t)xoADQ!UCaF_rL%oKh. $v=aGc|UA4K~VIW889w' );
define( 'NONCE_KEY',        '^*wg#{@z+-;/M yVmH}2@6z,v|:8Kz;7o?Eb?rZ#Y8/O2*ho3)KmojQ*pEx_PB-L' );
define( 'AUTH_SALT',        'I1mI#7)[`-Y=OU+&DrP,35,B^^HD}W]&qDDmzq?<L+12Zp@xNpF_mity{e=bcj,t' );
define( 'SECURE_AUTH_SALT', 'R OU}QN|.:wE[HjVN][}#)`KUCKpdXn/x/v]@P2}SoYne<a%CYYjT!8UXW;xr&`o' );
define( 'LOGGED_IN_SALT',   'FA`>`p7tVJ9qqo xYqscE[Xt%bo5Wo|g4h45=_Ds.svDBzNm_tM5yL)mhXgR7iId' );
define( 'NONCE_SALT',       '*k8n4JKj5k4x`L,WYB)Z.`Ef6v3&SC?.*c xBNJ~5tBG d@@YfXZnR~8Yb;CgDoR' );

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
