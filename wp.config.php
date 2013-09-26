<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'nEng8<WVa*5y>&-Z*3%T%P{.)rGJ_`n.>+O6(I%D4|9;+(Xy8cfBh=}#NH[G/^F[');
define('SECURE_AUTH_KEY',  '9QCEevB#V]F#w52xAZLLP`-im8c#J/<-uiw;&=_6JPN,&5E4.gdfR=br>-CKl-#=');
define('LOGGED_IN_KEY',    '7yn~+ZG]&d+K$xa9U|q0X]bE0p:T@W6nf.*DGbe&d#%,v]E!Fm]/[gkFv1=;29.}');
define('NONCE_KEY',        '3<0e[gs*{TaqWU&Z}t08wu^+R[$^][S8BjeMv<;go5T 1 {u8u}|>c{{>Y!^rjWG');
define('AUTH_SALT',        '>pm`Bl-Lq.(Y|-+g;#$W7Ds4*CM.JN.3h`N<IT&4g5ZAs;BxF%OnVolMD9:k|Z)i');
define('SECURE_AUTH_SALT', 'CZ6^]]K5x&IB$`G{p?d56,j^0qE2x1^6h4P1De_$X:RZU[q9+DgS.E<tmGF|Z>eC');
define('LOGGED_IN_SALT',   'W4Xj<jo;8cZ:=#,XQZfeYB-4^Dx=8u%M&]mT8 @t}#63Ra`Qr_kRU]^[7M-#|GRh');
define('NONCE_SALT',       'tc|S;A-N><7+o]iR)]iIiIlob`K-F&T[@?Ka#{<bXO+,ha4n`Tp# {,oA<.9(i];');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
