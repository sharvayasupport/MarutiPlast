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
define( 'DB_NAME', 'marutiplast' );

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
define( 'AUTH_KEY',         'tMd0BP_`<:p/jx]`V]x#S.L@+{{C_YxuT!u>(x}r:07j&)c~G%CvKj)=-p2VW( _' );
define( 'SECURE_AUTH_KEY',  'hcY`&8/Xc+K+KYW@)%7=?.6Qa@C7u4Zq |8_q >]),(S^RsQ%CPOp=3daX[WAcOg' );
define( 'LOGGED_IN_KEY',    'k1-~zbok]h75p-E{wmBdpN;(uCrL:>,|X^J~XQ=@)nWNMgfVz[tKREK!FW.Xg?C)' );
define( 'NONCE_KEY',        'zyP$Nc-m3p,{V/V{_[o{Y<Ol9J.g?_S{[pw{2WB-XT[M5sMdt=v.Z)@`Q@9;Yd?}' );
define( 'AUTH_SALT',        '{Il#8.;!X!/,qz]i[l`=,V=b:J+_w{%#,@l9|DczCa**3CP_k%OiMk:T~i@*aF-Q' );
define( 'SECURE_AUTH_SALT', '0O#Sk(tr5m><LdUs%7;M8WSzkx%+0rX/CfAblm)ENJYZk)~XTbXG[R,ZDE:o9Ho!' );
define( 'LOGGED_IN_SALT',   'gg/RB5~nYyT8hlA2q%B;~e@}`u_j1<]++bFCCO dJ*UW%LCkM@I;S*u?MPLJ-<T.' );
define( 'NONCE_SALT',       '@[8`<28Ps[(K >e@^(8K^Xx?yHbI0+CyzGLR#)AK75:uGi]+[/h2Dx}~V2G3{H%8' );

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
