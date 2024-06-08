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
define( 'DB_NAME', 'diente' );

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
define( 'AUTH_KEY',         'nNMrtmDOCyLw:r%)rG9W:#IZ}.h|{31o03%h~F3,e4<+y)z*v*,61E@q+r0[/EL[' );
define( 'SECURE_AUTH_KEY',  '9>sM]wJ8q}+yx52NL7Iy.=k;ateqVN 8dheT*ep.#e,`Z5r{KoX@;hMPqCVfBw?c' );
define( 'LOGGED_IN_KEY',    'EE>[&.EkI:v2qZ*)}NE0X1&X~T/x.pLvD=IU: W*yd4bhnuyS_n1pKn6wj&=dRPU' );
define( 'NONCE_KEY',        'SR,HxKGo0({!9B;@>Ch;&{sWz;;I&jo{&Sy]4T&q|Ui@Z</&eD?@Jb<^[]URR;DH' );
define( 'AUTH_SALT',        '&$c^Brwf:Y$%*F~TQta!j);<vF5)JeVZX_P+a#hz6,:)aZK>MwN*eoKx>FYsDW%N' );
define( 'SECURE_AUTH_SALT', '@G$+p2oaA?aX)<)J7JGph|Il$z-Vvol_;XBio:>)V[JZGO4tU0BRUTu|jFiSG&|N' );
define( 'LOGGED_IN_SALT',   'V,z4(.39GK@U $DQ]8WoGc=*j~z26,;QRjjxAvGuaMYs4m)}K#Go~j>.ZfD},y)f' );
define( 'NONCE_SALT',       '5+Si [oGjLU.dY_TL!E/wf=i%2)i?v7krw8L*y04}[1Io7qU{cK5/a:lQ9:zJwb^' );

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
