<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



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
define('DB_NAME', 'gryshyn_db');

/** MySQL database username */
define('DB_USER', 'gryshyn_db');

/** MySQL database password */
define('DB_PASSWORD', '3Ayp98Ga');

/** MySQL hostname */
define('DB_HOST', 'gryshyn.mysql.tools');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't2qh4hZW24XLRr3eBrKNIzP(JkEFWXi(@mKVVmqC(BtkR0jpQBFFZwlIKZk056QX');
define('SECURE_AUTH_KEY',  'Uxqc4&m)^(bHQev5^#S95kUYQsfUEzp6hi%N)xTp7ANSP12fldMFc5gb86Yb5jBC');
define('LOGGED_IN_KEY',    'K3Lur^ZcsliPCBF@KW3@@XJFcRnybKwMQF2ZXiUWYirJKmjCxfm#yQm%Ajw!gl^m');
define('NONCE_KEY',        'cW%9gQybToPfwB34LRkeMfDJUePVkADNkiJxLGbJjDasCbes4CRS1seyeIhm&)qx');
define('AUTH_SALT',        'jPu3^y%Uq1X#qP*&w5OQ^VXnB^TgDUo2WKUAzF9iZgg!&3yrcA2)PiyVET!zYZGT');
define('SECURE_AUTH_SALT', 'N^UvaDc4UBTx(KARZpAbjBPBAYzCb7%wTv#Gx^oX%WzBgO0@UONxf60QPF(we1ko');
define('LOGGED_IN_SALT',   'Ia%6Hq&MNDYbjrf*aJ#I9*@1Uc!&HsRd)Ra0vO8I7GH2UJdK5Y4x^*as6E^YL53R');
define('NONCE_SALT',       '9Dj!RaBD3j(kQx69k0QEm7JF1NQuGR5Qe*Y17P!vVN&FmUA^oQUeLDOJkk#OvUkB');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
