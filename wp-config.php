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
define( 'DB_NAME', 'Abhinawanet' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Alq7BwROeJcs22nY4eKKNep8hXgJfLFoMVclFU5OqQ8jNxpY5EMaIW0RXY8Aojh7' );
define( 'SECURE_AUTH_KEY',  'jFj7ENcr8zH9SGPu553ufTQ0UsipTN8jjKOrIHiUT06lz0uwPJWM3qeot7YkbVXc' );
define( 'LOGGED_IN_KEY',    'i41p8yi3KELwf7F3h94mcA9DwGBcFYyOWUx9iWU7iTxGloxb6ryYtcOp6RX8vbmc' );
define( 'NONCE_KEY',        'BL8pAMPITiKRkHPOZhBUB2kFOhILYaEAHWi1OzrvJccIihl3IEDW3AgYaW0NHFDu' );
define( 'AUTH_SALT',        'oJHyqlQMUr2JJNKAVV1omrVpL4jBwBrW4Jj9Fe4QbdcUUqbOlr7ubNJdaWf8SI7P' );
define( 'SECURE_AUTH_SALT', 'IfaDhddF8KpEzC0Z6t8kUKIidMcKh1dreehwAOMnCTowg6RNVuQVEyS9ts4BKVLK' );
define( 'LOGGED_IN_SALT',   'Arl0GNUSWd3Maa1ZkWknDRk9QclggkGsDxebSpXOa4793duEr0mDN6LpP0dNgymr' );
define( 'NONCE_SALT',       '73I0sXivSsVqVjL53YacsljWYuSWKVbHH2rHtKcMLJKJzpv2DFuk7e79kVnzbm5l' );

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
