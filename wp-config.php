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
define( 'DB_NAME', 'p6' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'p6_mysql8' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD','direct');

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
define( 'AUTH_KEY',         '/v},@*_B}yn^v|xjT:S%bDl+E% /p]O9oS7I>`l.kharBEEcC/3m0JYDj^^U)3.p' );
define( 'SECURE_AUTH_KEY',  'r)3W*dI|.V4_GAR73;;T6f*Jk#vQL^HcyB_C,^2omIJH +(]6^8qDZjT~pG#9^;7' );
define( 'LOGGED_IN_KEY',    'xW(lM-#FjXAYYd].VjXY{$~viQfWtN`U^_aSvXZ|DgKq.O=nvqQ5*xdFQA|(T!B@' );
define( 'NONCE_KEY',        '=Eu`xY%ICDX(JIIO|3,AjK|eiM}vzX,:MZXyr-;d>)e`]3V?WXR=l,@)&uLDyOXA' );
define( 'AUTH_SALT',        'Vh-p&@>K7Mqcu&fE`t2J#KR<.MF+{cvJJ;l7)v#fEt>jaGz|3(W0vgD%Vx(;L=Cw' );
define( 'SECURE_AUTH_SALT', 'UD(OsHh!gCXqg}_{hsUSn-}BRWT<&r)]C/WA[_FJ3woIQS8aG6CJ2M(>w9T6/:`J' );
define( 'LOGGED_IN_SALT',   'qjat8[V.s(}QX-XzeCQKYN@O3-+pP&1fc}o-0;%K5zi/npQc=@W&&SqcRd?K0IBd' );
define( 'NONCE_SALT',       'LblV>kW .I@^@kkvrg)K/%*;Gil!k<Zy|UXF?/4r}{EtCr;3|x/f*{N#e=*tHEq;' );

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
