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
define( 'DB_NAME', 'mentalHealth' );

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
define( 'AUTH_KEY',         ']~?RjE,meLx41e_b%59?<=kMVg~t;EvRC^4up_YK$2xC<j94zvhvQ:|RH0wwKs9t' );
define( 'SECURE_AUTH_KEY',  'sAIPnKi$V5v%o-UYxPD>|A0qzb374G<c`~K0J!yO{EQiCl7E:&b:ClEN>Z0%+$M$' );
define( 'LOGGED_IN_KEY',    '@*J)MBVuv%i&%^+<QRD-I^jdiqNNu6DdF#Ob`VeZU~Yi69W5;Zl3mdqwvY?u~(qv' );
define( 'NONCE_KEY',        '5<s!n},kGuMgnV&W|fdEGY6_qT7vtM$ 2rpLfnBH5*oom!L7ry$@J,+RztUOUu^i' );
define( 'AUTH_SALT',        'v)b86KCy]H IWoQ;e}3@dT?Xi^[p7d#8PSB#qGH]T dZz6y2bU@P~uk)8Pn]Bpd4' );
define( 'SECURE_AUTH_SALT', '6MObe!t.DmeD,5aG7|=SQ7lIN!2@dnZ_V-r>Z~0gOH]0aIgURc2f31,&DwV?= 1~' );
define( 'LOGGED_IN_SALT',   '*JvBJ9[;[.Bz!zt!9Y|vP)9n1 t~XsklDw&)R&l8D/e^#ZIS>Z$n6}dr[>$7JY<+' );
define( 'NONCE_SALT',       'eX:|-.yRAHustEIgyq3]35?4.KCvF~8?SxOPu3OMt$I-IRRPao&Uz.srN}PO?tH[' );

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
define('DEEPSEEK_API_KEY', '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');