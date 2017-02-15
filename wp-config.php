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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'g] hk:IN:(]me+?T5-ebgvv1$ma-gHsh!.M1UO<ps&E:Yvp*5rvX3JTX_$/F4n6I');
define('SECURE_AUTH_KEY',  'VP4aY.eX+^Ti)[Y75Gab%1=VB$?.-`_Q#eNts-rG{KOJeywX@`)MDVtDUX[N%-<3');
define('LOGGED_IN_KEY',    'mvOjM;GkH`1GY8T[<] eg7E|MqRanw{c8u-e(5bL@3gL<9h]0Q7Qx0hP_*,:Pl`H');
define('NONCE_KEY',        'vlpDmJttPD[C4`6X)wXs5y|wBU62v2L)X{|2*`fY!( :LYub%=n$)8N-tFc]9UYk');
define('AUTH_SALT',        'ga6/gMMf4KZkxSkWv/4E,Hiff}Bea-Ke)@`|M}j^w*Ja0@|@1gQM@$:AcJ?Lv[Qh');
define('SECURE_AUTH_SALT', 'eXOWAqQ; Sz({`q*edty~MP!peN%pI 7pjrffNYQr9;zu!-;<!!!ny^Vy1-7sHZg');
define('LOGGED_IN_SALT',   'dW)3MO*X8N:NXuC!]a+]+:bsMr8}2rh1lW:.Lz~C9s{^CE9)3:;g~kE+0Vtazkpt');
define('NONCE_SALT',       'Do<Oj`?~g$*C{A3!Kn+((8B@p%6)(t<+b/ mj*c,R=ULm/mmTvLAJG[E@[|hCXbf');

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
