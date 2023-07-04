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
define( 'DB_NAME', 'lukasz_wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'GdybyBena1' );

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
define( 'AUTH_KEY',         'qw*$w$q!ztWnM1J(pwl|-`nIvZy)R*2?!=_g4h|NB@eUbj>i;zd~<&cu%7aW_/H/' );
define( 'SECURE_AUTH_KEY',  'lAe}F7>~e$_`kg>AyDMvKC8?:[i?(- MNx(e&Cs90wAI+{FZW)Y8F&*LO6lU57qs' );
define( 'LOGGED_IN_KEY',    '@}6 Ek!CI0r)q:1FC5*[5[jc){X4i+8>av;uQ)1-%tVT~(nxw*<uV=lgqn&tBGNr' );
define( 'NONCE_KEY',        '<:deO*M&k[sj@T?AAp7&sB [(L,Yk:VK vjQB%0Dr.Q$3YhF6_DrDNB(dKV*I>o+' );
define( 'AUTH_SALT',        '(>&u3ja1<_rZ0DBu%:)9Lj{x)PxLHSN>[Viexki`JfE-Ov](3r2XWzi,,~G4uz>C' );
define( 'SECURE_AUTH_SALT', 'uI@Ehj?7G-_X`g`AVN~3Nheb1~GC$ 9cI$4e&Kb|y^dZk|`b5>0no<B-(DjD4^sY' );
define( 'LOGGED_IN_SALT',   'ADH1I64qU:FJ.7uT$3IxlP*(VO]h/+?q!3%yZ3EEQC&-^~~hYKU6)sP#Sq%[1Y_!' );
define( 'NONCE_SALT',       'ILnLo$iR-/sv92Rb3/c$@*&9A/mGjPL]J**zHq4]xSIBs3*$S3kiK7a0JzQ)B4nX' );

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
