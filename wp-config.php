<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ID*=x-J-9xHD2J+?Vp,[&9W}v`F1dvEr0~g&u~NpR.lT_r7(0$}CQ0`94a0-FWl.');
define('SECURE_AUTH_KEY',  '(%:XudDOc8b@m)shv7hk+>oP5d*zm_,y2QA}_F*-15Ck&@(@p,$*t%MqSc|S6{>2');
define('LOGGED_IN_KEY',    'Xs[(|KS~;YB3GJEPrL_enCwQ|+u}AaXJ -Ofd6R@AEpc9>M]TZZ;`uWf2Z)#O~-%');
define('NONCE_KEY',        'lij47b1!}pXFMh2tnw!<[jXF^|MDMMx] 5$d?+G&;7e|$eo3YD3OI~,T.Z9>&bHe');
define('AUTH_SALT',        '!IYx@_I(2NaGWdiI.M6&!<SBY/2O*Kd2:f^B=R($]zz3/~,)xP+.X,KJ21m6`{~3');
define('SECURE_AUTH_SALT', 'v6S21-$M:1R;>Sbyy=9$E`V]0|.fE U{0<*Wh!n>COCt0J]#Z9}{Qs/HF&d21`L,');
define('LOGGED_IN_SALT',   'nmo&[9i5y*)-RqkE+J+fI7LS5N^7B@~{uMi1Z2L1Vl4BstL7PM-FY%5YAz793],d');
define('NONCE_SALT',       '|[)a!WPXz=a!.6JuJ@8@0W)+NrAqsz-}kLf9o|Wc=y?l,0.KD-2X/uz2rgNWipzY');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
