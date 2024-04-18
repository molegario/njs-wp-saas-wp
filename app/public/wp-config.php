<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'gm&J6%{XOm`F9S.*D=!P[UhU_Rg1<;EG8I)K5wRAlD}M_{hi,0L5J%{KVMJA=qhT' );
define( 'SECURE_AUTH_KEY',   ')9gl6hon?>[|#jeo:b&BnR<0b,6AmHMY vjAI}[T2@rmak4m& vy#t_J|qJ~ZQ+V' );
define( 'LOGGED_IN_KEY',     'nbp`5hnFCL8O<<8ish(@P)c[JHI_3d~!])`}s+V$_plzWHls(*W#3;SR#zMC/GKE' );
define( 'NONCE_KEY',         'FLOj:b!%sA9i*[L^U~:+}isccS1#P!]<,]Vz]e4w&3d3=>66q$9,W*%c4r3.$$Is' );
define( 'AUTH_SALT',         'Gyk?t!/%,o0R~u?2835YClKNrgXv_lI~a$BxHjILpS*/x+Y=n@{_8L.Epv{3:e`K' );
define( 'SECURE_AUTH_SALT',  'iG^w:IS9xHc=sW0mjT7^aFCPQZins/qX/f6@i;<V;%M?cP4K#ppQ[*_KdyB)E[SE' );
define( 'LOGGED_IN_SALT',    'K<NCE@7WN)?kq8YKz-|8HbWEiqxx3k/a_}PMals+_$/I/||>E_yfCKd Gtavfz:R' );
define( 'NONCE_SALT',        'P: mxuaPy09srgwH)1a!#Cg`zDMVuE%JJ&V5X&C7j1tDU2<^Vqr-9$iBJ]2o{Ul=' );
define( 'WP_CACHE_KEY_SALT', '?adDfThN1fn/Xm-&?]Z#m$!iZR6j>=##R0Ky]Z3; [)r7c<zq4v0H9FC{HayK50:' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
