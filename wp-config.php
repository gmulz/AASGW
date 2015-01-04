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
define('DB_NAME', 'allergistDB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ue4LI==js_!]<aZt(U)y,Iv)*ty3NTV+c6^luWt^:,[|-8Cj(f.2*|L^|5V{>_yE');
define('SECURE_AUTH_KEY',  'ta8[@E`Rb|7No&#~4SLR6bT:(p`xqm2N|u.Pm~S{XC~Q.ipy <wM+E8+/r3R|[kz');
define('LOGGED_IN_KEY',    '% 31[<C`&Run-.t|74!-$95Zm]/+^YRayn<+AaI?GI3zK;|X-8|VxA9j{0cb [g}');
define('NONCE_KEY',        'CZwNEk|u:m1AOr$s_nrLM$I[#B.+I,TJ[z{efF]s[)(6f=mqu6IH.{LjXw.s^,Ci');
define('AUTH_SALT',        '#VM;6^jV`+k ERiT|rS9qX$#NvsIZk+$-3[bp]K-T>(BiTmhZZKBp|--b:BAR-m:');
define('SECURE_AUTH_SALT', '#/&w1@+)e&_S5OeV>];2*-E_xu22Ep>74Hq<+^!u_}(b9r-.xb+{~8v-2c+Exktb');
define('LOGGED_IN_SALT',   '3Vn0{OfLj3%D0>= U~T.+*:{O3lxGe[%~MI/zk*u(SDF fB|o_5e>DeyyY0<eM,D');
define('NONCE_SALT',       '!a<5j;$Qg/r(%A;In[S)Qju8Thh-ko#~8#,v-vgIkqS|GU%R}o].P.|?s!l BLiw');

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
