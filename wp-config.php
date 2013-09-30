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
define('AUTH_KEY',         'u]R)b^-w-8L9r2?7&PxZ!+/Z!M|%9 elhc,;#[9(z{{YDnA#8%svWj+/O+0`&;u|');
define('SECURE_AUTH_KEY',  '7n^wB`([#Dxk*X/e3uj&S;y_q|gAkg+Bn-_<tnE-yH5&3I>LrCG.WU4`%06ezu&~');
define('LOGGED_IN_KEY',    'xX4[XC>4SK-!qv5G?bhqkco><m=j5^_$Q^Z>^_$(?;D{hloOP9W-JkwhZ?{H5K^V');
define('NONCE_KEY',        'AKYM/gBG8,jiBU1>z-+,=A5qAa/|W)98 6orPT$D9iBFfa?.dS4%se36Mb$cqz,S');
define('AUTH_SALT',        'xk !KY6b$l G}Z|ZBp9T-Ghj!9c}KcL+!*B>r9,x1OxHT*?2@!&=x-,3}~+$<%6:');
define('SECURE_AUTH_SALT', '[f(_LM7TIB5^P?dDpsb7pTo5 R<(tpA|GB2{IKbAdo?W=$?)e|<5yn+0*;l(d<GK');
define('LOGGED_IN_SALT',   '|QCE<1a5|eA-v}*9X^<yX>&0g<X3y`-lm94v0lt.-^{#+lLitzW2i}+<MM{m/|Zx');
define('NONCE_SALT',       'q:%@4#zD;dA`isJw}is&Wx,;YTC3/gt1i*o]i_R;=: w?uh]6_PJxtGhYUgtMwr%');


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
