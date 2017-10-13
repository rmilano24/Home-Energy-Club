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
define('DB_NAME', 'homeenergyclub');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'a3yBsE@7r#/eBTlLf/$~>)68b:/{@DJ(F&/[iD)V2nt&=g6BlbqRz$8;V)76Y`W(');
define('SECURE_AUTH_KEY',  ':/tM4~FQ[nL6d~vJq@ [O#k`l2Rb3=sm+-P%P+,6wDya}%hh$Xhe-vq3QIrM_;GT');
define('LOGGED_IN_KEY',    'hn(%6Jg%$n,*}`IT,F(F%X9z[e}SrUFi<&S}OcR4Ao]%kO<pnEBO.u^DSO]m;,m]');
define('NONCE_KEY',        'O&~LuI-3{MrgU[wUub~RD( lqD7m7Kb8rF:7LRn=UHuAm6?U6$]S4/8D[xcZdqm+');
define('AUTH_SALT',        'Th1`&5F1T_8hRPNedi4S7L}WA:OpHX>>i=}!>&+mHNx)?~zO|5-I;)q}0e`p4~:8');
define('SECURE_AUTH_SALT', 'K/U?=+<<_cgV8/Wt)PpI=~R%@Uy^u~CdnNVSBI~f7iyicV<5LsdY_PKp!t*F|yLJ');
define('LOGGED_IN_SALT',   '|Wji1w ld%~b}10?=a_y>2I0}zU6b#|e|S6mX7z6F:z,};?dLiL_9})Az,j*,:LX');
define('NONCE_SALT',       'brtY3bj^|Ex<[W!NdU]kcBA9WD^4y.TdDd /N)5o2Y0{BN!`d_L5dWumH546]._E');

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
