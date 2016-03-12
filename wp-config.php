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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/udaysazv/public_html/udayalive/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'udaysazv_wp492');

/** MySQL database username */
define('DB_USER', 'udaysazv_wp492');

/** MySQL database password */
define('DB_PASSWORD', '[35C!SPxj1');

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
define('AUTH_KEY',         'lwvam6hu25ti5qrz7ykrm8dhhjdh6naz1oarwifv0xjgs9i8mmfiqi25efft4deq');
define('SECURE_AUTH_KEY',  'xb1dyxxj5yhtbjrtqatktpt9mcvlya3u1muihpmvbrqw0surnb5yodjy67kz6ydh');
define('LOGGED_IN_KEY',    'xgsqx3wp0fpfkqpuqqrrq0l20az3vym0k4szletwcwo7syzxmjla3aae632l0fpy');
define('NONCE_KEY',        'vlzwxatt1x1xzucaaoof5a74lkdqnypfz4upudvgdr1dasj3oxsymolq5ljftojv');
define('AUTH_SALT',        'kvgrswvhazegkhy7r7dza7svyimsqmmox5gzfi94ttcuzmkuybolniv8x6ntlzj5');
define('SECURE_AUTH_SALT', 'idnup3qbhtgoc5vljisspdiruxj3crb7dsm9levt6zhk7xem7tx2qvlzo1koz78s');
define('LOGGED_IN_SALT',   'mpgz7kmnwltfdnfm9v6deczlzvhqvwv2texhz3pzgh9dq6prioouajl1ghca44jk');
define('NONCE_SALT',       'd9cac2sdnskrp2mzo7klglp9kjbwli8g1kw1ui7azm3hybzv27lxjes8ax8wdmp7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpo9_';

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
