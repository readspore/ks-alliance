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
define( 'DB_NAME', 'ks-alliance' );

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
define( 'AUTH_KEY',         'K,fUoZ{{hr#.`ZrH~*1;F@&Zd*hS |Z(z9dTusFl5`>by-K_?b%gg/yB/q1/@tB_' );
define( 'SECURE_AUTH_KEY',  ')ug{05u`t1x+;S6#4) 5xcN@z#KiE_5qh2_!K>bx,*99Zc4lRfb-U#@E1x]HmLw1' );
define( 'LOGGED_IN_KEY',    '?6Z@&O$dGraDPh+[GL:u**AuLhSh^L9vf/s UM,}!+vtjr<9dEp?&Hg$TMyEK/NF' );
define( 'NONCE_KEY',        'sr8d!pmitzbIqM6|zO[:,a%GBAu^6VMoyp}C:1}MnPxk<49-50G)QT*3<Poq(ZJ7' );
define( 'AUTH_SALT',        '*&]V),U?sfQ vas/P>18}uv}] Ty8,z@J>_$*WCnO1GQU#BCXz3^sLya:!)=F{o-' );
define( 'SECURE_AUTH_SALT', '/h _`qu.B_AfQ>QZ2|dppA>,^cDc ar$:9r5oetC!d+#D9#M]Lj]Xc`5IbwT]768' );
define( 'LOGGED_IN_SALT',   'QM`hi+4oPXEPT9n*I]{NdKO}!NVoe:!&[dih)NZEmk3Y5WI-$gO>7I9lq#}47WRd' );
define( 'NONCE_SALT',       'nR:@E-[JTkLN7]:bKB/}S!;Rj<#Uv+{F(w)}71Q9-u$BoW#H0D>WXv[A~BoN7+z+' );

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
