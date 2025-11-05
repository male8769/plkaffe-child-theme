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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'storgaardmultimedia_dk_db' );

/** Database username */
define( 'DB_USER', 'storgaardmultimedia_dk' );

/** Database password */
define( 'DB_PASSWORD', 'arez4p6kft5wxdF9DmcH' );

/** Database hostname */
define( 'DB_HOST', 'mysql1.unoeuro.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '@L#+,y~GIW}ZPrZ6,92-9>`Jq8qPF_*<zRDe;Al;Urh9Xbm2)>{HHj>yd#.62BP%');
define('SECURE_AUTH_KEY',  ';*U5M1{K!}vAY =gto85`@uhMSV(Z#;w-F7Eqa<i-3xH=kbY8A-|L*MSwk#E|j{;');
define('LOGGED_IN_KEY',    'u7?gHKF,fqO1UuQ_gA$#b*Hhy)f Us|{~&y{=Avjho?{ IfVNzv+![H9yP$C /?<');
define('NONCE_KEY',        '=X<.z,Ti^|=l|0lLc[]VM<c;b30AZLY|b`*z?;jq:^pa*gy%792ur><zNU:Cbp)j');
define('AUTH_SALT',        '>U=En$x,Axo<_kT4i0p v!`ffAKyoX(Kq8c8C-)/r5&UE32:LzJTzclV)Y+`l%h<');
define('SECURE_AUTH_SALT', ']S$}B-R8?^4a>A,zvT9;wC+Za/l%+V`$1NV(>CRc1=.e<&y|/ehX>8qjX}{uRq_<');
define('LOGGED_IN_SALT',   'UwW14cJIJC/_H_,MMECN+7ClU:GuD+[%KVh1VG}t[2M>AsaKeoLG$Wz,+4{sG@I}');
define('NONCE_SALT',       '^h2!K+J-5Hwxak9%OGt}Huor5Fh977-}JqyVZ:(j#<HneaDwPEN&S]+mf3|B[+eq');
/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'plkaffewp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
