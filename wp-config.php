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
define('DB_NAME', 'kurs');

/** MySQL database username */
define('DB_USER', '*****');

/** MySQL database password */
define('DB_PASSWORD', '*****');

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
define('AUTH_KEY',         '?v~T`UmFbx!8oF#H9CgJq@WV1cJC2NaX8qU(Mu(4dnLcl9lA~_*W?<5<Aldju)nl');
define('SECURE_AUTH_KEY',  'mviQ.BF6nxU6]`7!a*xefW;Xn?N7;:.r(U_#5eMbW*u9?IpmEW<*Gu7RGe`MRC>?');
define('LOGGED_IN_KEY',    '1WNy_OB} u@-u+!=Rhnz8^F%)jcQ7]6W_|E?nC^_wT|3O@<:ae[_<K{8eeOS&mfZ');
define('NONCE_KEY',        'vA7/T~L(8[j!8)xbJGxRYfKV|OEY.*s.SfFf8dbbat&</G]0&5)P$e ooE M&)}=');
define('AUTH_SALT',        'h1qYd^oCU6j^0yu#]$Na),4KrZP&i$Z@d)z!#J*eqlT]:tle4gOEYuK*K1k|xe}r');
define('SECURE_AUTH_SALT', '(Jix&?6l1cJG#ySW^DDcFhAUa`!]H1wr-6b`g#DS<g@qAie7;q^OQlDj:]w>ikhD');
define('LOGGED_IN_SALT',   'R:HxIow-2|%]tu!`klGnV6ds,+1l/<|CUq[[kCYi:(eR7DuasKsilV)+CZ;kXZw%');
define('NONCE_SALT',       'GT-@]7FEaA%(JN/T1F; i.LqakG;j!Cx-nnV`He(VWk?Q6t+|w!Wvc%NI4Meku9M');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
