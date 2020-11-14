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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'k& %4Z=:S+[alkD[dLxN1^.J&n [C@_SL/BwH:?M/!5oe%r2:?DDdB4^zCet@xjc' );
define( 'SECURE_AUTH_KEY',  'Woc&T0FC5c1$ggy8LH >I]uD^0}R54skry-FH8hMIaw(g9fZH#]R@:e^EGXXX8wC' );
define( 'LOGGED_IN_KEY',    'bhg/a-er{9mP-_(>5-f%2j8>6H0PT#@?A4xbqV%`Nev!WmI9#J0zMRt3-%%YJ!E)' );
define( 'NONCE_KEY',        '2.~iaSl?:_y4e<,5FV8%#fddQE4xi{4)vF/.!M&Qw#nX|8;CT|N,Q@=$^|D#d%w(' );
define( 'AUTH_SALT',        'lej7J]I8YW)sy1f1N2%CHdTc-z<F_#U#9.Rh[,Y|A.Iv`EsDg<s9}LY,EM%Jr dC' );
define( 'SECURE_AUTH_SALT', 'CmvC{tf4)4mrI)bDo@=oOXBb_LT^lJ^MPO()?tskxZt*#b%|M%j8GTG2Us>uy69i' );
define( 'LOGGED_IN_SALT',   '5<@lXW7B& gV[iFc%asnwc5323bd(GOe9:|oE-GE]aaZ^a%6YN-h[&;OgREqMB@.' );
define( 'NONCE_SALT',       'NAE,,mw.6R%grui;Nd]may 6N@C.;7R>/*rj>/pAl9LmG%;]gSjTB}czJC0wE<.Z' );

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
