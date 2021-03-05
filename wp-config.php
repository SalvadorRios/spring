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
define('DB_NAME', 'fase01');

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
define('AUTH_KEY',         'zU>rFde>^0)`,m3.w:p$W,wK6$_[ZL0eaRo)0Nu~F*` &-)VR^ERf<sxoLiD%%9f');
define('SECURE_AUTH_KEY',  '!Zb/~U&q,jq#T1;PE5+e>#awDu[te|e>R5vYYOoYv_6hL-WgHN^;/hLn@i5z{@;C');
define('LOGGED_IN_KEY',    'jQJqP#zkMuqDgd_x:hgu+ou~7kSh&BnMqYpgDxak~4c&CuuB+<$9*_jGEA_H7h,-');
define('NONCE_KEY',        '&f<3g+#tX9bTzD>9IXq6o~9Cj}/HH|CLT?a+>ZAz+{CWeTb:v54+]@^&&K<n=;=7');
define('AUTH_SALT',        '.p4r^E80_i4h$W+s>x5+Y9U-c.TGOdq.IBy[GOe|[3).[W4Z+*sF(z~m^7|NT!65');
define('SECURE_AUTH_SALT', 'sv%-Iv7R/YTe)Rxb]t+=-063Y{1Z}$FViX7Fr5u8^(HF?CfNnV~9zF;RC&w1@e7Y');
define('LOGGED_IN_SALT',   'Av}oVKlaw7nc3gAKT:w@zyKhN8hRxx]p,t?Z?Kv:/q-!# ,R4Ia;bqxul 56|lc#');
define('NONCE_SALT',       'u<;W7J.cn3<T6l{98|HP>n|-$,-*,=KW?+It~_YnDjPMysr4FSr6A0=<qDct/4Kj');

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
