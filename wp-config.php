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
define('DB_NAME', 'rockstar_code');

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
define('AUTH_KEY',         'u/({eYxy!-eCU}HC1)Y|W&MPAV[#Zih@uRU_GPS)H*y)?R;=0%;N@Ww@u<:_xWI!');
define('SECURE_AUTH_KEY',  'i)~or7QxJPKvm^:pn/4$&];hgQ_;k:koM:Qo##`*<Bh lBT3X|GTYovj3t.tO [(');
define('LOGGED_IN_KEY',    'y/xXH U+|Kat4-NE(m0u2v;I?rI9jr(v??mH)DtyYTJ)l>?d7zh]jSg_<l<gVM&2');
define('NONCE_KEY',        'I9L9y%2w~v6`k|L%=Qe6T0;C5UGXru%?Qv6d}H%.K{^JbBNY1D_{P) Q*(Sk]oDU');
define('AUTH_SALT',        '3H74azc*DvN$Qf@pJBx{t0qPHffkRb*--HbYI2>t$v6s-8cbz4)O]U]a?zNNrJ)n');
define('SECURE_AUTH_SALT', '?=K=,:@TWrKNSJ!Q<$T&Kn)0A8Vz6q>ghRuKex`#A= C[_f1uFWE`_p-kU~go$.=');
define('LOGGED_IN_SALT',   'f^:$Bt,P}t~v4]tb5-m&l&njZ2q+{m_wT_y=p=vg2%`*h0+.|T-i}{8B~JeuND2P');
define('NONCE_SALT',       '3z0W(Fws<04Qy[+%UXXja,ks#H4FlhRhr_4Zs8K@%F_fbSYnENMDs8asrF3xk,O(');

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
