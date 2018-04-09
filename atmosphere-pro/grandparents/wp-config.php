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
define('DB_NAME', 'codefora_wp127');

/** MySQL database username */
define('DB_USER', 'codefora_wp127');

/** MySQL database password */
define('DB_PASSWORD', '3[2-1qSF8p');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'foxp9nuiottaevmsnsoudfroxue7nqm0q9wzwdun0pfgx4paygi50f2gyzf4bami');
define('SECURE_AUTH_KEY',  'laahvimthrunvsx8szwv7laadgbpe5qayp8nrdbh9f1d1qjoyhdebwf9uvhi2vqu');
define('LOGGED_IN_KEY',    'g1z8ss6nlrgskn8oqfbqw6xzj7pqds1ynaakg7pv9ele33h0zi2vhoa7wpu2dpcn');
define('NONCE_KEY',        'movoxcc9utdexyhv0ooajjsbvgdnobg87zyudqozskgeuqogylbccbqa3l38w49s');
define('AUTH_SALT',        'aikjihatmkgov0yu4pwjcgafv9rdywthbzncbdxbierioa8r4ttl7srhs4iu3y8d');
define('SECURE_AUTH_SALT', 'g31tsltnhh9gnk0mhqqquolnycc4mdsteg76tvdiwog2irwe8bn31kww12xjsxgt');
define('LOGGED_IN_SALT',   'uqrhpkt5jueubebahwcwpulxbptmvuyo8qnzb98hjewnxgcvjm8k4a1slv37qhpu');
define('NONCE_SALT',       'ckxn2j0jiy8vuuit4pjdtogyxafsyy5zilgzszaw1wknp8sl82qnnzmalwaytcfk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp6t_';

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
define( 'WP_MEMORY_LIMIT', '128M' );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
