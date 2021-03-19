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
define( 'DB_NAME', 'TestWebsite_db' );

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
define( 'AUTH_KEY',         '>/!.efjR+xsT$0mX%~8Vhje!uYGTzUOd)f!AO3>7Fbv9G_F)ZxZcZM]a~@>69F?N' );
define( 'SECURE_AUTH_KEY',  '.!sYl9|W1VIC)(ryD@gP_3Fs l[JDKz58@Ql>R^.1x:X1fOchT_pztDvYzS)Cn%>' );
define( 'LOGGED_IN_KEY',    '-^]FxqN6%f5(H)tdit}X)1:@@Q?p(x/PN9WKkqUW_Nu&uj)qqD-P%oZJc~T.Io<y' );
define( 'NONCE_KEY',        'u9ud5jJQXB[YDnb &]B~6+69`-t*nAp_4qe$qv_vh{E`z)/mO9s%5|nM`8$JMFEi' );
define( 'AUTH_SALT',        'kv<~7NChV{kvq;s>l2IZ7Ay[w-Y9}herA1A@s:aA5Y>JV=!~D8R_g1oQlLO-Qz$N' );
define( 'SECURE_AUTH_SALT', ':]vx~!ja-]qSd _<F2ENjr)r&Zdw]1dxM0A/R>5;y6{*oxpja[0 +7p8SX}VJFuA' );
define( 'LOGGED_IN_SALT',   'Y>2JZl_Z(Gax6/PC^}(`)/YRr%p:e-~TT}QSa|nPa|z].Z^vLRzgd#!Ai-N(Sk9R' );
define( 'NONCE_SALT',       'Z1oS*9JiizdBalE8!L6%[k3FI%[d3o6>cHt6GPZPul1FKm^+f#Si6S4`n?Q)ZM=t' );

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
