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


define('AUTH_KEY',         'HCQKBjNbl3DnVNqmjkoHYoC5rYF9xcDRGoOCnQgGXLa2w53TCqnzLEBDuKgnX90mavnvpWka/EVZwywusljuww==');
define('SECURE_AUTH_KEY',  'fdgijq2rkr3Ctt/3yyKNivWPSfwJHUPcTelQl8XzqLJ5dWyO+NfZ/Jvf5UKVuiXdIA2gwsaTT3/yETwPhaGpWg==');
define('LOGGED_IN_KEY',    'CjnhO99aJZeHQw3OSlfgEaPE0/REPrGP1MPBvguqjNnictU4dv1FJ7/iwObQlUGvViGIn6X9QjogzUBiscFYzQ==');
define('NONCE_KEY',        'C5T+rp23F63/9BqJmCcRXEGXV2cezpr2VocqPFkVkS2MzBtiSyTlMKblXpG/4TnqFmplu8TKwsoWRRkmIG7Mgg==');
define('AUTH_SALT',        'IWg45Q+NXEarkageKJmK96VYxWwjEGSdFmcYAuxQodfzJP6C6J3YWNKKMMXpVY8tXAlK6XsMi93HAT8URf/l8A==');
define('SECURE_AUTH_SALT', 'NQufrwiowLAfCN+OP2u1ZFvkKNv+oosAtW9j1vU1Ud576oUKANcWgImrKqCK22eLYEOU0/RKLMMKWSi4cWYFMA==');
define('LOGGED_IN_SALT',   'e0twFSGuwHIQg1xFAaqA9Cg5L81P+uFjYzEEkNU6ZwnKCD1plVW60B7tYtsw9Gzh8t9TRspYDLoIaUmXnZUPMg==');
define('NONCE_SALT',       'aNvpEgldSp1aM9OOHy1z88+s03KwweSKgXjy2DaC4/PyQjrYBDZrZRp6zUoPNVOO8WgOZCwNks9dUmx873x3Dw==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
