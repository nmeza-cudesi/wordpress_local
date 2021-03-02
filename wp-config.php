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
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'DtUWeU3NHPSwDWzhsXlXzwq7jA5eJU4fJ72EVqGAENLNRb55vca43wA95tpN9PIX' );
define( 'SECURE_AUTH_KEY',  'oW3Sy9fzGASTMcEdHJkFMso3EeME8gqQQiqy43umNOWMc19M1LuF7P0YOG74zkm0' );
define( 'LOGGED_IN_KEY',    'ZfstT9fjp4Uh4mz3Gtxwf2pHacBbfBtPU4PSeWlvU3vUs2OTP6yTBjg4kJHlAc5b' );
define( 'NONCE_KEY',        'Fdyc2qWsfQJQTXW8z3R81lB51qYShlQgNMCdbJzU3Y7cxyffw7V5VxLPlExeXvxu' );
define( 'AUTH_SALT',        'kcEVaICC5DxqIykbrAbIMEOqQFlzi6dHGvpz9vNjaUItD6HAd8iffKgBlzm7lP2M' );
define( 'SECURE_AUTH_SALT', '8u8WTBGB83WoC3DK9MJN8smemrQz0Dg3eb2ZG4Ncjhp2nGDqFxgkdqvNkdG0t34B' );
define( 'LOGGED_IN_SALT',   'RWfSdPTo8NVKKiIHmyIukok0H6yZxZDDlnqTPECXshz2IvH9a7AVhJ5D5qnoUwGM' );
define( 'NONCE_SALT',       'EeITWIXo0djIFL3g4KfzGcSXdS41nyGYT33jmcCQAEgAt7DXCwy1fojQ55Gr3JIB' );

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
