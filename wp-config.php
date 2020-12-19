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
define( 'DB_NAME', 'hncosmetics' );

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
define( 'AUTH_KEY',         'fBn7ltR,y09nI}4ZKFCsFJBhK.2JjnD.ZK9+6S4;UIyRVA.Q+<Dr|=tKQv*I5aSE' );
define( 'SECURE_AUTH_KEY',  'MRi.%*$ZXXT8y~2]rZS.H_x <rdDQpC:)%QG*LYh9eSgI6Yapt<y,~;iQLXsxzl|' );
define( 'LOGGED_IN_KEY',    'I?b@P2P2(VGnD=$vG1!?8EP29XzD*6kv2(Tj9l U~TN5s!>H!?9(o(dS%RXcqRZk' );
define( 'NONCE_KEY',        '>W]G*}B 0B5 .+x,It:+3X_R0`rm]8Pp29DvyRu@m$HjOJa$sXcab_-&#%FVby.@' );
define( 'AUTH_SALT',        'RRrh}[h;Kq{`tw.3:Or?S&v9q477+iAQPwX}kieD!%SQ.x;s,fDr$zFY0aXqCOM!' );
define( 'SECURE_AUTH_SALT', 'Vt(r|Yr]xSaecC5AWzN2K+_xP(OO=<..+y~]N`L R?XOKCwc57fJ7.0@5Un_hRcb' );
define( 'LOGGED_IN_SALT',   'Ji}NAH_IrRkkm!Uek_}7UjT`){=BE>-q]5<=6?YAmPCPWqee]#a|jW0SvvkBtwx6' );
define( 'NONCE_SALT',       'Hez>a_74f|%[12#W|N|z{]n[)39n8fL!)qG}Jsi%8`Sd`LZzubrS/dIP&)*gq0T#' );

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
