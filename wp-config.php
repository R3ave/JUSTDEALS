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
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\techpoof\wp-content\plugins\wp-super-cache/' );
define( 'DB_NAME', 'techpoof' );

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
define( 'AUTH_KEY',         'kyB*m4[4}0je.dpa,M>$Z.*4%zG~O^yl9myrafz#nq57nPb?FaOoq]IaFebr6H|5' );
define( 'SECURE_AUTH_KEY',  '1QBK}HrDod-NZkgq{ o/a8h.A{Qs60}A4g=Wa*Z<}7yu@TWE~n%KMs[?0[I>sp U' );
define( 'LOGGED_IN_KEY',    'FQxib$Rg2+h&Lr*6z^?u<-_TF~PY+A,rdm]M# qovgToiNrN7fMbxCqKL<%;t$Z:' );
define( 'NONCE_KEY',        '59l =r:m[6t9E%-aw-et6%9Aay1;fdIS!-:UHacw7 NOWKDxeZREx~3qZZNHeBcB' );
define( 'AUTH_SALT',        'nSyTe_gaF7O+zYC+NjwDvLDe(q2c`X_swUq`5+gxb%m28,&sxyka<%?10oK eOwN' );
define( 'SECURE_AUTH_SALT', '}3_v)K/dE0a@#ay>,2c7lkn0]N(HuzqT)cox}DHagd`mPq>:wBxT~<UB+fL,enP6' );
define( 'LOGGED_IN_SALT',   '!z<[|Cw2,L-F.:WJ[$a2-K|`(a)hWW`O6wd2u!B~6HL K1Lk5*;SuCf(o|oQ~+rN' );
define( 'NONCE_SALT',       '*Vg2ZjGnC4s!uQ6-lD];LU~+rGu-q#mGp+ =2UUkA8P5uZykc~~#-g es~`aQ;m0' );

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
