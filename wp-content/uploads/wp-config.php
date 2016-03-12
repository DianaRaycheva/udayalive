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
define('DB_NAME', 'udaysazv_uk');

/** MySQL database username */
define('DB_USER', 'udaysazv_uk');

/** MySQL database password */
define('DB_PASSWORD', 'kr3t3nskala');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'bwtbidtnpbxxjqjqq4okmfbgapgwv1i90ymqg4jnxiwxugmxospb0ifvhb2pfok2');
define('SECURE_AUTH_KEY',  'mk7dhfmtzq3lduit0q1yvt65xqb4ghrsxtrvutlwyqi03eerqaaqpcpur8uhqzte');
define('LOGGED_IN_KEY',    'dqbxp9rcwjeefejbecpvbxzgrwpbsxxuj80u0gxf451esuzpoqvqtd5pijyevizl');
define('NONCE_KEY',        'r2uk6lckgnzdt5ksnxtetcquxn5dniiqyovmpepfgdcpozihth6fof7pqopfojjt');
define('AUTH_SALT',        'klbe3jm1vi2yhmbjkvpzpur3n0kmjecoqqztoxaffr3gqn4vwqd77trhjidzbsnu');
define('SECURE_AUTH_SALT', 'kqxne3v350bophsocbl0eoh6r8wioap6vr1ekbjmi8ujpatutnktgiup2xdo9eit');
define('LOGGED_IN_SALT',   'kmf4y67b1xrw1ms9linoznrvxqr4wuyxvgvr36o2wmjcj8yy6q1eafch7moveooj');
define('NONCE_SALT',       'fmstcn2js5bpcz0fvgrlccx4fts8mrqdxibzfi8grhrdljw83gonn3ghg55gypqr');

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
