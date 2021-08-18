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
// define( 'DB_NAME', 'lauryq_db_gwendoline_matos' );
define( 'DB_NAME', 'lauryq_db_gwendoline_matos' );
define('FS_METHOD','direct');

/** MySQL database username */
define( 'DB_USER', 'lauryq' );

/** MySQL database password */
define( 'DB_PASSWORD', '5VfLpqpdqTzKgQ==' );

/** MySQL hostname */
define( 'DB_HOST', 'promo-66.codeur.online' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', false );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+vxH}e1UD4TJwhCf 8`jA11<N2T85OTe{|tN-P<qE)&|K]`vp;ZPf;5nVyhB#U[:' );
define( 'SECURE_AUTH_KEY',  ']$~Pg5*U9z#L9+8ho437Z_@5&_w|L?PzxOpDy3ReVFi.YA|AQ,yRO#V55VYZrK~I' );
define( 'LOGGED_IN_KEY',    '$tst4-W=9a7~MtN4T]zLS6Uf%B6YE8c5YWGhs8xLX2x} V}Ru1YP%P^f4,DCT(R>' );
define( 'NONCE_KEY',        '<I(?YFDgHzZci&; RSv)uz`8td0Mxr;!o<vL}t^O B:oMU>6)%_d7j>95{bR&c!@' );
define( 'AUTH_SALT',        ']K63l2(Q-P(Oc(<1Qg5SGvQf:8i:W_K-IfzD-/E,,Wmlwn6Ji4Yg9C %DL]))4}&' );
define( 'SECURE_AUTH_SALT', '@ *q<9YQGMWxCUC;MT}ww:g#KxM=pOR& rDoj.)&DQm zF:HfS]|pz%zqOZ# <y5' );
define( 'LOGGED_IN_SALT',   ':WpbS_/XxO=sV!,^Jj/?^%};h:z^B!UN2hVz~!J}yQJ(&+!@b@rt<S$k&l4(W^xy' );
define( 'NONCE_SALT',       'MA!$]9CTXj~gg:Dcs)Y=XAn9~`)f{v$UwLi4>Hu7_)Ao*uKl ;)QoHqgy)kFW/vK' );

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
