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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         '~6FY.O-CnbL68g-TlC(2+l(hep-D:UeB:{tk.H8{s+xn3W#zW:}8W&|Td?D_z&5q' );
define( 'SECURE_AUTH_KEY',  '5o{8|8DzQ9~r0:!kAM17;X6 QU@-3{cfp7j+Y+hi2g_352 ^~V]bFfh]l#MdK<kR' );
define( 'LOGGED_IN_KEY',    '|jSIWWdY)tXob94&&+}8Ue-h]z*lf34(@(zDUAS0Hif2G3xlUM1xKtz>+njRU;G5' );
define( 'NONCE_KEY',        'mM<)CWkjUaGPIiH&?yQPm9`Y+0s$qgL},MD4R(;:T2P>X+OC&@TNgP#L#QX<v//[' );
define( 'AUTH_SALT',        '?&0C+nb`pE1iXfT4l[h!{.3xt|,}&X.u+,HsSA}r@Ivn($X5z@QSv%|_H=2MN |#' );
define( 'SECURE_AUTH_SALT', 'sxN(1:5[kz1j3@iy-7 21;?,ceWqFJiw_35P9C1{y0H5Z;WghpjO^ie~Jf/9NFS7' );
define( 'LOGGED_IN_SALT',   'a<}yN7Zd8|ig8+o?fYPN0S&Qq<ZsUC!5SiT0E}7l4V~5-X5OVB1=oMUTWk:S5ic3' );
define( 'NONCE_SALT',       '`?d;2XG&O@V@YXQjr~C/,UBomVK@OMS5@}Yz6BCy`#5c73tx!,}6)p}X@{m1*`=j' );

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
