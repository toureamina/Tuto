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
define( 'DB_NAME', 'tuto' );

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
define( 'AUTH_KEY',         '0YG1<|_icMUR/rK|g&b&!GHH+bLK Ynt>9XsNm<!hlAx[in~w;$($Kbe}GumMiNp' );
define( 'SECURE_AUTH_KEY',  'C?sjaMh$|)9:CIb@i6kKg895%89s/`:wH@fGag5^7m3ck`cxaE{i|sP//&#wV,Ku' );
define( 'LOGGED_IN_KEY',    'y+^0D5#f,35nsvk_0r@7PZmb3Q!z@iyBwX>ZZ/N>W+_R2(#?54ob#yQJ?fTgCYVr' );
define( 'NONCE_KEY',        'o&UPzerIC=A 18%SE@UZ@YD{V=Ov:La_`ot?JU4:j9*vtU_~vA:*x^?MRY5klc$|' );
define( 'AUTH_SALT',        'ackoMpx6?Uj/6$8cRA})MOc+hnl~!&lbm9p*.e0x}afeyN^`RnLs&bU*^|1ERj~0' );
define( 'SECURE_AUTH_SALT', 'i#hl-J(uH,YM..l|=Rqi}{>#|:m5bb=|.z.jE>@^:AwBV!LJ0+QQY7,nJ>`#&,>p' );
define( 'LOGGED_IN_SALT',   'a_wPSrH2]h`vAxd>|A^Ug8?~=$}rxirR+uBKj#[P`s<|u5&hk_?zV?Pg9,Wkg#Nn' );
define( 'NONCE_SALT',       'f0=hJ5ArH;#OAqv79b$Z)+NdVsI2bv9HCD!/i>!}Jcx5P5~F~UN0Gv-=8SLWT+jy' );

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
