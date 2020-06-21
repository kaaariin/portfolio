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
define( 'DB_NAME', 'xs935882_databasename' );

/** MySQL database username */
define( 'DB_USER', 'xs935882_kaariin' );

/** MySQL database password */
define( 'DB_PASSWORD', '.Wx6RhFgU' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql10028.xserver.jp' );

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
define('AUTH_KEY',         'obqXhZzy7WpB+vFUYeKdCxHk4G2nEfvx/9kptYvDXaR7b7tM4oqVszn70tR2N14QzHt2Er8LrRxhlQJeX8fG9Q==');
define('SECURE_AUTH_KEY',  'mXkPvQVIIS3vj/oFYjycJueXjHRoRR5vPcmDJ34yFrb7B1NrpvuJsjPMyvWFdIupFn9qdSlfZ0RhwhW6mXj+8A==');
define('LOGGED_IN_KEY',    'EubVFHwcCrayFyNwQM62ZD7pVt0KMelaG2TBZHnttx0rCVDIlLG7U1PmotyOMJbxTaMqJ2LCvA7T9EyP9urrkw==');
define('NONCE_KEY',        'JtJs8kJVuTyEownSk8VM40TSUTFj9TssQ4T3DGieR9jqnyF5KKx7SG2mh4FqPs16QxFVOp6yxiKc8kQyg0F3Og==');
define('AUTH_SALT',        'scZqomQvTS83/jttRk+NIxeLllpn9a/i9YjkvUZQw4t7AE/u40x6S+qCSMHf24CWAJ9cko5hpSBGrg6SSQ/01Q==');
define('SECURE_AUTH_SALT', 'GBugiiltJhraDVd4XCGZyvsOlc+5t2p9cVNjmt3Bm469c7DZPISzC+CFHsHAttziwtRyToxzBiAJyaw2/LcWhA==');
define('LOGGED_IN_SALT',   'bpGtqdoCFnwBwUECL9FTFf/XxnLGidUnRHz7xOb+7sjziEUrZmmlYjHO3nkXdLgpLJTErD/C9NCCiaCvZ2qZqw==');
define('NONCE_SALT',       'T2i2nbzR35dL3J5X6JJoG7D86Va5NAdLVQrxue7JXBLv1QN+OaRWNcSluleYk6eAsV4fQSk6WbYtlA/54usrTA==');

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
