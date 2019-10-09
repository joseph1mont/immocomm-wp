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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'W4WvhSqQJSwBmpk0w38TI7ymbzJh0iV/qYUknLO8cltpd3ouycU3QaQMjEe7alAygRlA2Avd0F2eavBVaou4Dg==');
define('SECURE_AUTH_KEY',  'loObgbqG9taxb6e2+AAoLj+487xCJk9roZ5dnZCXlKqBmTl2usF1ID5DN1P/yyKj7BHHrTHJB/r4lOi0sJY2EQ==');
define('LOGGED_IN_KEY',    'nprWoIRgNQgyMKN94dvkNDQw4zWr+uVySBLmg7G35DOEaLbhRZRKfK6jKXzQq4/Ka3TAmeyTaWWLGKSx+SQD5w==');
define('NONCE_KEY',        'S/02C1uXnSP+T0uZZzblYwcxIT4cbeuo/9VznWm6GMeL3HMGVbJuvfslWhF0YP4qUXz2DUxj3UPkuYOqRA7M2A==');
define('AUTH_SALT',        '1jWvFf6Vy95lH87uJPuaRb16WGOnjptvvjg0apSZf+RDEza64owTIOMNdK8zdnGQDzLzqARBWoK79phuj/HXkg==');
define('SECURE_AUTH_SALT', 'bE3pjpZIDUi2UjPCJIjnRviGUlvchUvkeFDmooAZL2z9ntHzZtl4Ls0lqjhrosTr4TokuRK/Op71QhHpaLocxA==');
define('LOGGED_IN_SALT',   'xhOfoTuaAHpIDMENBUlJ0cQjTgaBavEDeqNKltigYYamGvnFB7H1Qf+O91bhCbJs0GzCujzXN8w+ZXeuZTV9zw==');
define('NONCE_SALT',       'AcKqWVaXxOmz+j6AuB9YEpCOYAtodHkiytaMKlQnfIwcJm87h8sbiU2QcJrquIutliDcvvqIyP5LgV/Bx+gsew==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
