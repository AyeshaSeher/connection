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
define( 'DB_NAME', 'connect' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '>Lf:~+5TYeSlqHm4u;?P[p40S@ HF4N4k!3]p#hmmo^}jD>(T}^z5}]-)P;K[Ut%' );
define( 'SECURE_AUTH_KEY',  '3)Zson$.`&/&;U)_`0O+L(FR.x$RfjcUdW@+i:O**&F%}HI)_>[92@C#iRpNwbs&' );
define( 'LOGGED_IN_KEY',    'F4IQVAB->q!z|/P}t( VO< ?&IOL18dJVJL`|9au20o3xU81KOdPS}eG(w3E!$KB' );
define( 'NONCE_KEY',        '.7g#7~]jwYW@n`5sQ}Z;@Igs#e.I21W),vulu/KFUNuq_DAA>03VYe2uZKiBo0Py' );
define( 'AUTH_SALT',        'x]<iBUhj*x.gv6C/L]~OaR$Y.2Y3@c-^X::kX6Y@<<%PuL,*xQ|?(;kR6?9 fQ=?' );
define( 'SECURE_AUTH_SALT', '_XEW?mwTx+*1*y=NNHOI_o%q ?:3t+;;DypFwW.6OUPq;lYObKx; ZmDv@mR,z0T' );
define( 'LOGGED_IN_SALT',   'sVSD4v3Om9>_J8:9>q`37vMS6Xs h7r4rQKc9YF`v3Rr|`<cBtni=(3MK(xqg7#+' );
define( 'NONCE_SALT',       'P7YmGxtyYE%|VcJXy,}:eD;v!U0NuKBXv[f`/LN`~a?lmc[Eb#Eq{@_.P]%GA^0}' );

/**#@-*/

/**
 * WordPress database table prefix.
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



/*** ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false); */

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
