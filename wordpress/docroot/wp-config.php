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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'TambaLamin2017' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '[VNLuA7k:b2pC&HWdUaH3<,7mhmhyd#.wjr4PWTw{q+QSYcRrw6$(JmNC{*hqH[y' );
define( 'SECURE_AUTH_KEY',  '6=ExA57~ jLiP_(@co0lhD[|HV6qK&+2q7z,]+Kxs8:<q.1oP?}#Tu_kd=lCtYH*' );
define( 'LOGGED_IN_KEY',    'hq GlEjOh!DCIO-&TE.9v rSk$#3m@Ge9V/vFBKWOwHh-XkU/URGu3E^S[E`cGuO' );
define( 'NONCE_KEY',        'Jc`>N*]DS6]xxE&f6j[@X}SZ40q[WCJ}*,*k:ac|%#(1g>jxf(PwMnMh_r@vQKt[' );
define( 'AUTH_SALT',        '&P&xkP&L([bFkLt3XdqCpjgq]-NZ-]CCFnbwow`Sp9(Gs@=<^&0i[WE2Tx+;-Q-n' );
define( 'SECURE_AUTH_SALT', 'Cc3Ob3RM=R<,:#/D4C1&?_W: b-QF681JH7j6`BAc#[4{He8=j6XWo_r?7UMaTTU' );
define( 'LOGGED_IN_SALT',   'U9!y<sfS1jT23Sv?CQK-Y^i8p9pCX*Qy?aT`/u9xohGI2@]g4fIujCV)@6]_Km4k' );
define( 'NONCE_SALT',       'EC[=j5<xkdcx:e!HZbRk00XdTs;V/GzH0L=wK[=H,J]*8o{H.>#_=Rmy71U{zNWQ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
