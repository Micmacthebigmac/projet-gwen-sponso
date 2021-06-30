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
define( 'DB_NAME', 'db_gwendoline' );

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
define( 'AUTH_KEY',         '/9>I?n9@A5#taIA?V>yd+FUp-8iYA#W.kmU8O74lY),L:T.` ?iVZzWiz&%E&wvb' );
define( 'SECURE_AUTH_KEY',  'H0n[BifJCAwjB<=ds7#dXFC|&L;b4}K/|4#IMl=u&,Dz9aBmF/^_Hf15B;?b?h@x' );
define( 'LOGGED_IN_KEY',    'Bh:m6mZPzc6A`v16SZ0nW3U6Q}7Sw%C!Q6LmYA!$_qd:W1I<<[|<RNiaU I;nwKa' );
define( 'NONCE_KEY',        'p#@Q8C7<j`c)$,h{Bu~zH4+_Wy _3_;W|]`6=(D,cWM^/9iroGwwci5zu$3],^Tr' );
define( 'AUTH_SALT',        'l0GZI?IUL?&A.DytCSV1n|9:IoZq(~Ps_m;c~u~X1=5o[74cUV}K}+!OVW)7~% 2' );
define( 'SECURE_AUTH_SALT', '|:uf85lT3k!I^&==DJ]j_WI:0.xvot|u/m`ZU8VB)&Yz Z*g1`B=.YM|Vk|A{(B<' );
define( 'LOGGED_IN_SALT',   'Bi~n$@}.Qo$H]ElBioJqw**D`1G?z9id+cHAg8BpSp#U:%&P_;9cw* APZUGw 2f' );
define( 'NONCE_SALT',       'O3V{e`+D6}swhcEG`}4 4/l-Xxh]lzh=8TxuHmL$L6[SGRyWg`V=I7DqJwHi,K9G' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gm_';

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
