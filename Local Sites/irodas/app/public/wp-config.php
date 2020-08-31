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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'wEAVG7G+qIUGJtMbrHPw7et0d5y3OqVXZxETjseAR0Ru/uIaoHdIXNHuQ/rN3zk1hG4L0ZntQQNeQtY5uel69g==');
define('SECURE_AUTH_KEY',  'n1qraioVB7Ia9qAKdzei04IQt8CHFxXJQCJwlqv4b+hdABhAZmYOt6c9Sf8gmCKIYAmexX+W7VdqjZny/x3YDw==');
define('LOGGED_IN_KEY',    'ix4Jb1DG3CeDbDgNoFNtrmGywd86lQ8kJ9USg0dCD+7dBZcyGOC5FpZfZdg7NZtoBuxJU8AqrT/4hPfy7PTd7w==');
define('NONCE_KEY',        '7FdWZbwU3IgNCJkQmVt/VqZmzNUhJf/rjIRLK4+j+C68DM7V+I7BMH8UNcKkK4PoW8IDkqsk1a4ErjD3TTMTeA==');
define('AUTH_SALT',        'fcg2as4IGJzhJL62Hj1BbyT54VrlONw+u476ml9rP17GIsYfqPPX22OhQ6QfMn6aufOA79NMSxeTmOphZpdf8w==');
define('SECURE_AUTH_SALT', 'i/zfvNTVvL6IqxPlxcNzZooYeN0UOtaKUH1VLD9S/GwqOQYFtuofUvwj5Z0O4cngf3fZxrbQayceXflvFU79PQ==');
define('LOGGED_IN_SALT',   'Tn5T2dvEVwFu2zCdqy9LF2eEnPq0qx8urmSxvR/PnNZdirWEUff6R4jBEJB8pRROz0lQP6P1Ha2EAIXcWjzLKA==');
define('NONCE_SALT',       'W53GPfrkC8dyaqTmxJ01TzaNoVceA7Qp0NStM/ApkOyYBTv6nKkUGrPDB8pAJODnhEwvGdzifnNO8389zPkTGw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
