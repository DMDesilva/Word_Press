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
define( 'DB_NAME', 'wp-test' );

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
define( 'AUTH_KEY',         'q$@`p=#3]]zb,E%ofWbRXM[,w+|:#<N>%%bvywrZ>qh?K=wGk}%nE?b=IrgbB,|`' );
define( 'SECURE_AUTH_KEY',  '|lP5.?G!: ztl-2eqjiGDBRtV+DPqq(OtdEgwD~RS1I~ME|mi`NReN{CXHfhJd^{' );
define( 'LOGGED_IN_KEY',    '@d7*JWc$~riae%XgM`S:qhS=FbR/T$A<WZXr#;W|R%>@v6?7{q2%R6A;_lPVM}SJ' );
define( 'NONCE_KEY',        ' ^o1#~$Kt[KX|Ey)F65}RSOK$6(|x<6t^l&W23$;0FR{+^^vW5XWP`meBc~=)Bqj' );
define( 'AUTH_SALT',        'UGKDfDSr<4bT]rd9:3bb=Cu`Q7hIbJ8TUHhk9XOV(DSlOn15+;t`>!NY{OjVa%9a' );
define( 'SECURE_AUTH_SALT', '?A}#pTw YMQv(Y(3xod,78:grWl~*VC{9>|^4SnlJ97bO,bVolN1.fo$hW9YY=?v' );
define( 'LOGGED_IN_SALT',   '9fP(]`B*Ez_PTM0qW=>iIEAwn14*xHO!hw<ccaxgTDU6|VvwK*,_s],&yH{{/{Rp' );
define( 'NONCE_SALT',       'bdM?Tb<-{SnOp&m_+4xFv/jwfu@.~<(7Sa@li ?>8tLuW1IT3W,Sr@<!7iqoztq+' );

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
