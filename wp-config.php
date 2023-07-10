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
//Test commit
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'client' );

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
define( 'AUTH_KEY',         'T(MFjY|L0D*+hD((,I8>RlcBo80gf|c;{uX(e0AII`t?5l5;I0 ?7G4HL6XoB~V7' );
define( 'SECURE_AUTH_KEY',  'JYN,T?5B4>kDK`YMJGM##A?uq+9jY{e,MxW.K&-qS&B-S%2{t<Q*_%=8POoG:ntb' );
define( 'LOGGED_IN_KEY',    'L(SJ~R!XSe.]$^gI:^+j6/e`%HmRU;)&;$EmEc<XW2 ^qD`x[Z/hs5,OuGsa-N`Y' );
define( 'NONCE_KEY',        'sz3)7X}Kmf1~hn):R^|-?*5/qg~Pcub-fIg_ND74m!z.(Q5=]1uYn(*[|I#`_m.u' );
define( 'AUTH_SALT',        'aW*~.Y;$.Dsx h+z L(nUN4R3$yZO,gPlSKi5&LdEoJ`Ld&Y>|x4%+I3=%>_^0BJ' );
define( 'SECURE_AUTH_SALT', 't/R_~/>k< hih=`1llK,ba)@A<3}:ct-)MVn,i}~s`3yh%+yXh-dY5o}JjAS3HJ_' );
define( 'LOGGED_IN_SALT',   '22WS;=kN3GG}>>dz[^10I xKP()8:CexNBGVTt=E|_wE]*6aKN r42&>i9jRS_G<' );
define( 'NONCE_SALT',       '$760[kg<6JJq9cJvuq0EK!)}tR5tC/e!CwD!39=;ZDn,`iu;DU)6-|CubqJys@< ' );

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
