<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'kiddo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V)LT,JUzKn##pQZyx={V9>0WV$;xQ27@&<hnSvt{8ul{a9 7|L}|b6xiTApt[ ._' );
define( 'SECURE_AUTH_KEY',  'WYIPnLWQ72TNN&Dk&tJ)7Cs1ZtFtj krhx~N34$Tyt~:wl8GgqxPY{$!JE9rr77K' );
define( 'LOGGED_IN_KEY',    'uZ3%lDJdeeI:1wPLyprnxAz<I$kz|<7E9]lO/=3vOXdv*tiSnd0GnM/d886)llPv' );
define( 'NONCE_KEY',        'knHY=WEC5sfY#UhW4rv^Gku*?nKULNkgq=M3]u)N~!?YyxHJ<(JAyDtm4pBSR}Ym' );
define( 'AUTH_SALT',        'gjGvHDl_ka|X(9aVVDA3?qjFM!OY,Dt3NqMikTs^)hbo6A)A*uss1DT$3al.&7t)' );
define( 'SECURE_AUTH_SALT', '7Ud UK_-+>o{LO)5a)E;-rdQcC{oJMmnZnG!<wr-*23uK<@fE%-/+@=3VU>VK(;.' );
define( 'LOGGED_IN_SALT',   'dc0|3y;?]Zj]<chp-fGMK1~M]|&U7>d/xvMYh$xvy1][p@vnpKHo_D!8bhd1-MR ' );
define( 'NONCE_SALT',       'i<Zxms7X+pB9c eA$CO!BGbL^p%KMl1I>v=?U1+jD|[.hBW@Bc+:|=jD#qP2*QwS' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
