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
define( 'DB_NAME', 'addya_eet_retail' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Vinod@312!' );

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
define( 'AUTH_KEY',         '9Kgy,G;${9EM(qM7U-V)`*3V#0oyhgxlL,dt#K*F|*x-7j8;;[~`T=lSyXGo,!AZ' );
define( 'SECURE_AUTH_KEY',  'JnZi4~=Do/P$]b|]t:cDg m7(UXh|Ws&5nxrH.?qEB`/Mgele^F,zIX:OL^lI{Pe' );
define( 'LOGGED_IN_KEY',    '6lrZ{vZYU7A@DqKE{l#cU~9fO!=$_(}Qqj2$*#MO tRI|)*=^@?b`&a2K8W[Bs=A' );
define( 'NONCE_KEY',        ']Wm$3wT8@IP4-bE{,:0Pp/=^=<Nn+r^+u# ,(J)OD-ANH-LAJk6%&|qy;g80c|dg' );
define( 'AUTH_SALT',        'lUdHCD.={MdE;- Qo.vJZ-uo+&QaQHfbuj^n}]eV[<tk,B{V(H%pOlm|<b!G#5)[' );
define( 'SECURE_AUTH_SALT', '<A+z}|n$[^>%.p2}K$`}>Dic7wa5XMsEa3!+6A</[(03ogozyX*H[G|ue1&Tx$?6' );
define( 'LOGGED_IN_SALT',   'lAI%ZwgCZofrT2sLi$gN^:US,C!nf B*$K&OVB1lqdHR/y+bo63R?+t77Iv|Fx6R' );
define( 'NONCE_SALT',       'J7YHd(1<E|O#GRQypCO/J*<P++{/1%zAs2hL:i+G|=.x_$o9alz[1$(c48@`h}o)' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ert_';

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
//define('WP_MEMORY_LIMIT', '4G');

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
