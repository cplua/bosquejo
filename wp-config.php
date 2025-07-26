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
define( 'DB_NAME', 'bdbosquejo' );

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
define( 'AUTH_KEY',         'm39!6t66^BPeDjc}T&ejcCT2f`[ 6XKJ?!KlJhbBst/;El{nd|2;r`mNc$3eQz@r' );
define( 'SECURE_AUTH_KEY',  'EFU%~+LD-~<nclBsX,?>8G:ek;b~kuc.QJ<n}1so*E3:Z}18]{s2m;IG{NU,S9)h' );
define( 'LOGGED_IN_KEY',    ';J,y%$T|1vOI8sHw[DRzx[I00tMZqp7%Wn{DMVBheKOOjdnjoTiO4_ GK#+v-J+}' );
define( 'NONCE_KEY',        ';V!LsP_S}ZNx~!p~Q!Hu&{iNHe6JpKON`nhH)0W9hAv_I^ib66?f8|Ido5O?_Ydd' );
define( 'AUTH_SALT',        'G0~H-Sp6sx%*9;VEHD#j:,I[8 A2i#R4YY,l{]@PD_Bu9mzEr G=1n+P1AMK5xWe' );
define( 'SECURE_AUTH_SALT', 'N ,Q_Yg:p)pdVl`J*NjiSEU*|j*_++ O0B:gl)EYAf]TF-[;yx]|`i[ZC6|Z_$sU' );
define( 'LOGGED_IN_SALT',   'j{8fualbIb4va[q%)G#-CF)#%;Kt0~$Y@^v2Ns%AHex,^ltL{]>pkt^olvlu,T#7' );
define( 'NONCE_SALT',       'D{6w`Ca3&]0FL:`!vgW/>?64}hJh *-.{F1>3Z@*.X(Z@)zJM]beavb>Cn|Ty/3[' );

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
