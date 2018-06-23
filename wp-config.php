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
define('DB_NAME', 'newwp');

/** MySQL database username */
define('DB_USER', 'newwp');

/** MySQL database password */
define('DB_PASSWORD', 'newwp');

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
define('AUTH_KEY',         'uHoy5svb+c>t&k)bliHre])Sir)tI6uQ)`^AiRezf}`80Q{=;E4rl)rDKcrpS6O&');
define('SECURE_AUTH_KEY',  '@FWL9l4k^$vk:]tKX0|5@YLdS ]:lQsQ83`ACRx{|4Rngr]axd%n3%NQ6kI 9rnb');
define('LOGGED_IN_KEY',    '&Ldw`(x7Sl$aa9<@y8F {`:09Z34DQtX9HEF3.DU4GU*MG:E)s/IkV$Q{O6$?:1;');
define('NONCE_KEY',        '4mi$_&.[XVFB]TU)[v][iVd%3Y:{;]k0+.+ut,Q?zO(_oc/W,. [q!6mE5YKH20X');
define('AUTH_SALT',        'GVKVfv-n0e`N|?qzH_[hcFy[^G,61_UofDT>u,$GyT;s;N8YpwON#)g;ogwcuN24');
define('SECURE_AUTH_SALT', 'd9%#^9U!COn0`]+/;TEQ:[.3<4wC;+U`C,v(1[dTne9;@aU~ZE=H$Y797?.64`@G');
define('LOGGED_IN_SALT',   'Q;eIzIutz#=/^-[cel8m]aNYU0tM]ur^gXUG{@uvWXRXUXoO?2?sGm!uu-o0eJn ');
define('NONCE_SALT',       '/]d1k&vMr1D_s-zB.}oIL{yOH!U!IAX>kg1V3D|m1EL5K(J*`xB&ToFr+4Wppq1b');

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
