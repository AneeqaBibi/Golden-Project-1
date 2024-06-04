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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         '3a6=CJTI^XBc3b*Z;oV+?fr^a|b~1(?fnA7Z*OiDvrxI/K|*Q[p;NN6%65M*{|<M' );
define( 'SECURE_AUTH_KEY',  'xr?N(mL4j<fTa|}pC~7e p;_@8e^6Av8P8x3}aWWeJ(ChOM@^$_j(04qo:lLS5+a' );
define( 'LOGGED_IN_KEY',    'Cwd|?;I bL^p)rY^Z-EV.T+G>Z1.b|fVb[de_xr[G>m$iGq+fX[]w/=-Y).gBh8W' );
define( 'NONCE_KEY',        'yWm?IEsX-]2q?ko#:ei-E[Be<oUxD`)HvGngioj-X1}2]x{b:p7AM&44VfK7#Jlx' );
define( 'AUTH_SALT',        ':YYYzx2aa>#yl4+}9w ;>!*NXgzzHa7KEPy.aPjDy}RF<kZM%G4Yt[00/tV|s;/I' );
define( 'SECURE_AUTH_SALT', 'U{f0zPpZ<j#a7k<8j>M$zA5+O>50dARt~I f`5O64#vX6HeSN*<8k5RoS *_dx9*' );
define( 'LOGGED_IN_SALT',   'v=mU4znfZkQF&N#qoxH}LfA($.Zs*ohX`(7-]fGl4Za[b?=kdJGfQvil#rlcAf|i' );
define( 'NONCE_SALT',       'b?^63byBMs*o]u@y-jI=GVg]f-brKm#9cAIa?VZ0{w|Qu >m@9-sn]N $N7a`=CE' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'timber_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */
define('WP_HOME','http://localhost/demo');
define('WP_SITEURL','http://localhost/demo');


/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


