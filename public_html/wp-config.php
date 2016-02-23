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
define('DB_NAME', 'chasethe_wp');

/** MySQL database username */
define('DB_USER', 'chasethe_admin');

/** MySQL database password */
define('DB_PASSWORD', 'cM(x)?];[fRQ');

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
define('AUTH_KEY',         '#]8-et`ceH:lj25(6YLD?dea(|S=-aRipJ%XYgF71*UilJ=H-hVU1/j:RlX!O(%u');
define('SECURE_AUTH_KEY',  'LB=wn49qd[qp2>& f-oG+8mI2i4;QvfX)0$p!*$K|2y_dW{d5ijgYAa]R#~big:F');
define('LOGGED_IN_KEY',    'Ek@m9vh9Q<9pd.`}*c^GEV:p)lnVPK=4&oe]V{WJz3{c}=lDZ-3k(~.A(>}5$ bW');
define('NONCE_KEY',        '.CK<Un(`kS;64%oZ#uwd~>O{-gE=NJz{=#j4k03Gk#;CCW1T?w{.MZv]hxkW!lUq');
define('AUTH_SALT',        '+w]r iD1rQ@.(&WA+|`+w/6&xW+T5z%O?!z|TDI[L,>YcjI%yr-sN5simzH=<s}s');
define('SECURE_AUTH_SALT', '}wLdMLgmC,,W/SXHH Md.Xt8d4(|pKb-yMpv#x8E`d-A>H+^e&tt!W+c<8fj%!Z+');
define('LOGGED_IN_SALT',   'a^MTB-v2h]=YWm4}1D7<u%YuUH+eie?rGac9?3-]5(-Y_penb0->zhjXgaQ-E}<K');
define('NONCE_SALT',       'NL5ip/GAv+^3/W!&kCZ|t[ nrbeT!psS,M{@|+N<zt.NmHEgKy%60BU6Q{#y){3O');

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
