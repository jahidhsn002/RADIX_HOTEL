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
define('DB_NAME', 'radix');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'blkljLg>~v^a_SPg1B*24$&TCm]bTtX{+T3V*uQMyu2?)3]hE,u!X_!C/PDo46:A');
define('SECURE_AUTH_KEY',  'iz`i&Uuvp>xoye%~KC,f}O2T0CRvuw|K~@`~ipgW)*=Ea^ONT[bTJFJOM$Y%-k_E');
define('LOGGED_IN_KEY',    'NyK-|Moh$w@j-6N@ylzf[swa~f97Jo6Q]?{z0~<gG;1 c^O12+**Sa=o]G*gS.0%');
define('NONCE_KEY',        'qF2@}<fnU(2X!3!)y;)8_+ f`%yPG_qEi8KW]A1BD<&iq(`O+Dc.Z U;2Zwnqis9');
define('AUTH_SALT',        'l=]AaQM$=(lTv>#K1}b8Pi+,^Y#R}*4?|ud!W|n%PEr*xDioO9]fe{0-fj[:rDr7');
define('SECURE_AUTH_SALT', '(62Pvzsx89UFSh`CWJI=4X`R85r%}Sd@)c$wx`i[;Z_bVCKYkdk>F9(2gn#9pqR|');
define('LOGGED_IN_SALT',   'tIbpj-d ,USKjNomNe^2Qoa1UJq87~O&rXASoJ<f`|c3I50|>n2^%.M^*:SrQwBT');
define('NONCE_SALT',       'k,7E>b+_N@Jy,6mpgTqH.)|GWaPP!p^krPjRc>m/]oBye&<RldBrSWV>fV?Fghs4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'radix_';

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
