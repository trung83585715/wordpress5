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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'my_admin_passwd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'p*+C_Sy&@jPyv+x961C#LM!7SAm+G-lZl@i> lCpB<X2M0$Xi}mt>RXn;+^]=s&6');
define('SECURE_AUTH_KEY',  '}pDXTWS3CKG2;|aQSV95=qEI/Oi[C&OToxp{2hlOCmw;IBKJ%)JEGi{bm1l&wn?V');
define('LOGGED_IN_KEY',    '}4nbg1lI[um/HoWrJ1(W}ld&Y:S<v?p7ok#M~88,W[N]98VJ}EX0&,W+-d;n>!4^');
define('NONCE_KEY',        'Mu(rp1<Q0x%U [V3l0wM+4;/2ju+)$!^WgYsXOv+/l$7k=|r8)yg`Uyjby@tLRV#');
define('AUTH_SALT',        '`XR0%u^/ym}Lk3/WjVNfLJ|SIoRu;C9gJ-v={4Ux}@G-3rH>q_1`]U`!]Y+qMOF]');
define('SECURE_AUTH_SALT', '>H1y{Z+NMBkk9E`f|Ov(OKXg^$_70w3u-||:fvXV-hlDr,W5QV t#>c0eVK`YG8 ');
define('LOGGED_IN_SALT',   'Bl[XE{Qy!ovn:>>N4dn9_dXeHiwnF_~G7,Q|zt0{*0f9E*{<{DH~TzXAky#kGv|0');
define('NONCE_SALT',       '5j@,/y`aMsW}_>kV|k<{tH6 uSi4j!9AMyNrG^ h8}x-x-lD3}^t3Q+-&0B#XIAx');

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
