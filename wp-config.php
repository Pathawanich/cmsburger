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
define('DB_NAME', 'greand17_burger');

/** MySQL database username */
define('DB_USER', 'greand17_burger');

/** MySQL database password */
define('DB_PASSWORD', 'reusMarco');

/** MySQL hostname */
define('DB_HOST', '178.62.193.44');

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
define('AUTH_KEY',         'Anrbeieq^BZ{D>>#-Cv3XH-)*oS<)5X|],Nz%ir2l.v9af-w${)FTAl}Q,I0^BL:');
define('SECURE_AUTH_KEY',  '.(k4xZX/yoPf#MYSZCFzuPtR[;l!f;-jp2JJR_$CkONr4tDhe9r>|H2F?4;Y(4]~');
define('LOGGED_IN_KEY',    'fh74_J&(Z:NiwKogkK<|QJ:E}SI^LL&_lp$LL9i!PKo1;4uW-Z0(}DX6jNs%ZJA2');
define('NONCE_KEY',        'mv>,er-YOz|R.;-|sLq(3bys=*TdwPMwc~83%fK@{>w/G6uf5zTrT_.?!kS-QY)y');
define('AUTH_SALT',        '@8]+Z75>jt#^N+vjI6TH1)8mQ/*+A S7Ms{bkV+Hn@P7~~PI{&SJE}h&9Qzf:m0+');
define('SECURE_AUTH_SALT', 'ZV~M$mi8!+;tL_9Wf*fl8x/8~SSM1B./6mBCq^zR I|.kXauf7Gw98XXop$5}D=f');
define('LOGGED_IN_SALT',   '2k$I/IXr7*bw)H`B?+H*[%_Mcv:+<I5jP[+.ccui khly|f(2+A`6Gwm>Gly(s?:');
define('NONCE_SALT',       ')Pd~z|EqYPiRqA]s@6 IyTb]n+EL&+i&|CpI-d9v;C7c4V.p]`S_8]Zp?P^+`9nE');

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
set_time_limit(600);


define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');