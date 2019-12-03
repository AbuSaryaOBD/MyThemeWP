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
define( 'DB_NAME', 'my_theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qwer!234' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?1zNX,BY{]y3Hm#E}uxxHxv[BB;8#h~jpG=) 7EP co<[k-77u#uSH|cV_A}qQK`' );
define( 'SECURE_AUTH_KEY',  '0wJ=:I(L8J1@5NXJXB={ZZVB/6q`:*f#D4G<8O;gZev]HdebYQ7j J^NG,VMy$Su' );
define( 'LOGGED_IN_KEY',    '-_ojD|7z(Kv?0*YDU<vU 5=,;^<q/V,P.v AjXQ+E2|zPuI%$:nNses=#7uDV7Xx' );
define( 'NONCE_KEY',        ')j8g(ttU/r-Cg!]Rut,qlY`~`/Y!`v(*#I5njws4zCSQ|v+mQ~90k$;h}21Ce$$Y' );
define( 'AUTH_SALT',        '+@Pzsqj}>Yj.Bd-&`$H.D&j-$DW!ED7}xo88MtjdljZ;%tj?b7UxZ9)RT/kJ+8d1' );
define( 'SECURE_AUTH_SALT', 'M6vDff L8aen$P_JS_W!P<&3cb{II{f}g6O*:H>>%0l?VL)I9SKd~O38_8T4{&gK' );
define( 'LOGGED_IN_SALT',   '0E@ul`:>L,tMWIS.Hh[vhL>Q?Q[iMNiUQ<&SHA6:(VW*2]1&}+FF{oK1?]z|kWn*' );
define( 'NONCE_SALT',       'kJ6zrD0aP0r(s!#sS>uO=z:{h3RPNP=;cErxPJ.C/aNjo!>(_tgx>5mw0Pj,?yFY' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mtwp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
