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
 * This is a demo and and can be removed easily. We are changing and testing files constantly.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vishasrk_sterling' );

/** MySQL database username */
define( 'DB_USER', 'vishasrk_sterlin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sterling@12' );

/** MySQL hostname */
define( 'DB_HOST', '192.185.129.121' );

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
define( 'AUTH_KEY',         'fr>V3m+rs+KW*b5`]z[PP8@U+a;=~`%F%kw-kh?Zhe3Vpnsl]8b4v#!~<}WcxI7G' );
define( 'SECURE_AUTH_KEY',  'EVUHg;?gF+7=W:2SU@}*H>GtP(:yA`H3Fj>*dH&pj}4if{dda=mfNL.Eoj=mesr$' );
define( 'LOGGED_IN_KEY',    'Ppp8f4K2)?JT{2Xx3)6PoesG2LKIB@<}:X@c>bc`:.Hz/.{oaJlb~Y-xg.,[|P|E' );
define( 'NONCE_KEY',        '%t)F@ZOvYBxRbx<z80FkV4s*IP2Pbj&<6RV-1-wvp(}HmMz*:_`6<:~9I;#nIus~' );
define( 'AUTH_SALT',        'Fn&h=q}OT$4;(5Qo92~f/N1ZzSow7=fI~XLumNr|K+0[e/<l^0YZM&&/vl[)f.J6' );
define( 'SECURE_AUTH_SALT', '#)R7Pk%BKrf8x*||8{mLgR!{0Idnhvx(gBx~W1%3C(KBsTpvZ)WbN^+_L+M5+?oJ' );
define( 'LOGGED_IN_SALT',   'awlS;}gx7mMPEb ,;8Sl=I;jb}-$`}~v?]-:p oSAd72;8hn|o#1[>ULkn2]SAnj' );
define( 'NONCE_SALT',       ')+NK 0N[0:,~a<tlK=2z3C&MWET`>HL2P#ataGJ]{23/D+S.a/,:ioBJ.mK~A#;B' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'str_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
