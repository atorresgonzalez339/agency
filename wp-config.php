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
define('DB_NAME', 'agency');

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
define('AUTH_KEY',         'FDK[wSp!,=#y[t<~9C-IJ[a]~s}?IEk;KsBiU.Fs#}7]0@tk>dvQ{3R3nHV;{8BZ');
define('SECURE_AUTH_KEY',  'V&!m)T`Fs/4mF.S]ziH- C}W{_k71(O]Zh2,0+GY,9v_zk3-8 p9f|RG0+KX~zC,');
define('LOGGED_IN_KEY',    'N>qE5Y9=2$I*x?tXC ]m,OPZ?WH-5Omt]<&:bp8VM{bPa^8B!^`Zh AiR!DIY-}0');
define('NONCE_KEY',        '*1eHOn/KvL)?HzO1xD.%g z)=Ln59)Z)^7N0`i[07sD}jaGX?7SqEmH*SM[Xk%Ei');
define('AUTH_SALT',        ']KWB>MyUv!H_m_]aQ>$a<X=&]1T3ETq[]3B5XLiH`LDVmtPiGVjzQKA]E6oO,q}3');
define('SECURE_AUTH_SALT', 'Vlyiu*(E&3-D9;3q@.,S0lT?1ZusT-kU{.CXcF</C&TcBn[%=B@aJUEHa{Rxf Jk');
define('LOGGED_IN_SALT',   '<pmZNP~#MyN$&iBp/Fk8W!.n7{w#JGc3)B8-d16]vD,qZa[Dee<03yrvz94dxKd#');
define('NONCE_SALT',       'EzuBeASm4K&|W&&&@WC]o`DCto*9BwlRS;}jQ=?>sM5F[_V:dRJ/8>LZ?e#]L8Ll');

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
