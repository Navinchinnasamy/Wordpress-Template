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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'navin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'navin21594' );

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
define( 'AUTH_KEY',         'L$bF(Q6LYzW+u{X!row(%Z>Tx7`2I&?;I7/L: fIop< h1YtI`sd~HZ<6hdlTz{P' );
define( 'SECURE_AUTH_KEY',  ' Y[}vLMZJ6~W=zSUDB6_8s7gGf(x1$l}7b(wQ?[(h~LiUmgm-p7u*T0~mUcCj$M)' );
define( 'LOGGED_IN_KEY',    'VVE_,FR.9oAz]lY_xI]8sqOSQ>Pq067%2zC$VwS~z!ge,[wk_X0 XkK-oHT;r9__' );
define( 'NONCE_KEY',        '{e;FX%qch(b&OQ2ifiu6u3:Pv>7ypBMmPEE*U5:9;[cHaaJN+PA&cK[zfDpwtOAI' );
define( 'AUTH_SALT',        '.ua`X`*t*,Lr?h(h9|aP% -<yVABZdT#E>TteV@2+_H[@b3pI{EP, @)vZa<,_EB' );
define( 'SECURE_AUTH_SALT', 'M^4a~NJ0b!(fWBm4=d&t:6  :ciIGuT+s6l7$MazlWO{E65#qki-2?K)PL9:(c@`' );
define( 'LOGGED_IN_SALT',   'D!6O%Xfr;./s;=aP[vMV+AV|)2obkYC>`07MO^w$AL`B~?wD;U;Hc7K!-rK.1@YN' );
define( 'NONCE_SALT',       '}S#`ND4Z/C|QIFhkcZ}_~Qpn5u2dyuTK!-|wzMJ.ql@4[>x?Mucee#]H2lzy6Nsy' );

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
