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
define( 'DB_NAME', 'newssite_db' );

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
define( 'AUTH_KEY',         '/qiQdfH{|2C{yrr!2cFnPI_9{+s})}c-rYhXyxfO/;B/[#r#/23I=PpxQKLnG)l7' );
define( 'SECURE_AUTH_KEY',  'QMkI(< Sm=6wf49^5 uehl^jAMGE[Z#E-.doKn9LaOEq7@U:EOrab@.sO>R##,&6' );
define( 'LOGGED_IN_KEY',    'C]dZB,7[1:S;c/>23:*+6Z-v-mLP).XusM( *K^gmCR%8[?LtL@J>!; H5C{i+#%' );
define( 'NONCE_KEY',        '-liQD6A/%S6a6@BQ84_pwT5#2^5Sf:-VgcJ]N7DQ3Se7P#f{k4 B H*Jlu`__Z) ' );
define( 'AUTH_SALT',        '5lQ`(So:@2tz~,,x{>v<9+zmSL|gGJ0J:g7SiD*Rsx)l$|@vMHp_R>wo08q`><wk' );
define( 'SECURE_AUTH_SALT', '1@<(Qz1PEWs-Aelluu,`Q$=yiyT,h63PX&~ol5vCXE~[p|mgPR#<iCd~RT:[xKI0' );
define( 'LOGGED_IN_SALT',   'D<i<N/VZ|pS<&KX/.k.iWhbyi,wbWcG}]5tkT%Qsh*~(BLf|?(,cC7V~9v2)%%.M' );
define( 'NONCE_SALT',       'fekY0,#@2+OVGXu^ @-EqN|TCur0KJ``3zfaFf5KGW6eggR+_I1f<k}68rsvu5&V' );

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
