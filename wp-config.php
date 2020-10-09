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
define( 'DB_NAME', 'good' );

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
define( 'AUTH_KEY',         '!^*sdc;W,tJa<+_12T+6A[kC?);pi)|sD}sVxk5J7T5SkM$A*28y]})p)>AA!4<l' );
define( 'SECURE_AUTH_KEY',  '?%U%a$]W>Nx=gg,nvTULQXEx){:($r,Lpb^2[6iacQ7r ptqI>X0-*f+J><9urT~' );
define( 'LOGGED_IN_KEY',    'rj)VmH`^2X8DVg}-%H&4~4A]$<G(mqChzFek(70[ipX9dV{99,M$R:U$-Z#`c!}7' );
define( 'NONCE_KEY',        '=no-</@R4CNelc%O`7+gH9GswkCeksta#K0Ng(b8l~}U8Uhq`Da/qZx*JA-Zx@/s' );
define( 'AUTH_SALT',        '-hDES4U*xOy7VAF$tX8^H=C-OJ>86E@ua9Ci}KRp&$-iB]BHV3+cK=? 5tE=wFgv' );
define( 'SECURE_AUTH_SALT', ')bo&l#,}KMSB*Li:(Lm&U8r-*((%$S0}6%K/d}5F&>mCy&}XsBk~as<}ZUw;rLk ' );
define( 'LOGGED_IN_SALT',   'B:NZ D$sG<zY5:`m{Qo|?~w-^}B?`G;F8Y ut!3Se_Y!XH>D)70Oi]|=O<gv(@#N' );
define( 'NONCE_SALT',       '>QlZ<L1}X+b>9z4SJ8}C%yTc+JJDy QLk?[<]$|Amvu;JQc.#0GC&O3)g=cgU^5N' );

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
require_once( ABSPATH . 'wp-settings.php' );
