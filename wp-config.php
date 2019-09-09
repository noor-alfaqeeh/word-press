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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myblog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'nor0136655' );

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
define( 'AUTH_KEY',         '-K?Dseh;&Cxl!@T#lcq8M4HZIsZuweu_cQ WY&tAMS(*{rLQK98s?4;`$<V _{~i' );
define( 'SECURE_AUTH_KEY',  'ZR=C6.mZ%RPot[NGfM^3UPZbCqYVBCe7[Lzbj@1Ur^:k:H;;-N U9rUvgo}M srb' );
define( 'LOGGED_IN_KEY',    '7,73F-&iTz,F}8t.PfkrI!CtqWC#]O`34p{64_jdIpTZl0Q;{FF%rB@vKTRGPKdy' );
define( 'NONCE_KEY',        'rSL{]Al5Uf<:5K/-A{]qMLcXwVbX_8d*0MIhYr:oE!mJG<70yS^[;cg9sy1sl6/l' );
define( 'AUTH_SALT',        'q/uW!{,?9=E<^Sw7>rc[O(T!<KksUj,xMPh;`/xw|9afp{O4Qw-_zfs@1I{ihm8K' );
define( 'SECURE_AUTH_SALT', ' 6a/Dr&bORE2dDK,g-.t^&gEnMuH)Qa^!0kQZ=Wm7;|#-Gu3RD+2{M8Q+|gG($T<' );
define( 'LOGGED_IN_SALT',   '9@Pn0}AA]0^`E*8Ooqb&E,@}wL)u3ud/)BR&%QLJB8kz9*[U^?IJr_<YPKr*2,?u' );
define( 'NONCE_SALT',       '9g#|5r$9Go:@uE?..9fIn~/$-#]2#-r)_dIz 74fr^.blhG;5rfFF5TL_kLFm~R2' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );\
define('FS_METHOD','direct');
