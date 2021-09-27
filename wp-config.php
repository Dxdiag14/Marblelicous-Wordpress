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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'newdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ktd9$wL;1oE[9c,:]BjuRt9zr+PT]vF&b^A,S[7[}a=VQi7vI!9-:|p[`k$zJE?<' );
define( 'SECURE_AUTH_KEY',  ';.9kx5<%jZWq|NUZC-a`~bxfRoQ5J626MTuL(TvvR,/_K%z?-I/LA#!Z |5*](rD' );
define( 'LOGGED_IN_KEY',    '^ZCD]IPq]E_+@={8U@,Gh%s]$>hmj=Q;+V&i-!^();(/~ZS3iD|o%%j~nqT r@v%' );
define( 'NONCE_KEY',        '(u}op]5o|aF30s(,FKZaOs*7akrf@m4=;a>0L@.ZaLZ0$m)x+r2*=y4&q}|_`!M8' );
define( 'AUTH_SALT',        'R>L22O*4y_gxi)mS=h4gkrC.=I|Q$=*{t+?rLj]lizwxen/&#<%U_^&PFYa^kBAb' );
define( 'SECURE_AUTH_SALT', 'oKL]$!k-iLNOzi:N{lA(BvWAeex1Bu;Fh#ADjN_Ee#1A2kzF@L*4(B/ >P!J=^oN' );
define( 'LOGGED_IN_SALT',   '_kUu?<Cc,:^cfA|!y$2XW42BjFE(*}H|$8-Z&;p|Dru0KYC4B$;(Kwg!;Q}qY$1U' );
define( 'NONCE_SALT',       '_;E8B)U4W9uv+]^Z?4W9)LT85Ij,>=GpW6xk[/7eQ(%sZtR`?v*{&M7Fz}79u/$:' );

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
