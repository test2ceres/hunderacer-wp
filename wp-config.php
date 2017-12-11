<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'hunderacer-wp');

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
define('AUTH_KEY',         'F%M-$?FkyPB|.*uUjQE~VSk2@L`_1)d+ST}~MC|lea/: `0>|:UMbkcMP_kOX`cO');
define('SECURE_AUTH_KEY',  'x+sw;}Mko|O?+k)zq?Fmis;~KEPJ.muS|,D%G8&S|G{##F g^;5 (+Zs$w);YM3t');
define('LOGGED_IN_KEY',    '^w~ n+xFJ; zq_eb/M/4+d7i>W3_o_|_Y`sCe>E9E4&dk{9GA.]Z|E;Fonecekm}');
define('NONCE_KEY',        '6a*0jSI%.U2IsN |VF]pxi2%q)Bn!{~hEoG52x-Hk(a*&WCrn+0xIC2JNG&?ME4d');
define('AUTH_SALT',        'KR4w`=)7Zm%-VX0@~H@DBJ)aw,d/f!d?}3t2;tg$-5BbaZ&sXjsmcY?/|g=&p]@1');
define('SECURE_AUTH_SALT', 'tLZjhr!E-*<V9+~%H3.`e&JGBJlC!/6;(7[nFH|)04-0]Xv%F iM+APX{v9L,!!l');
define('LOGGED_IN_SALT',   '9*.=@tO9P#|&0oU|okB?]mH-7NSiH#Sivt@ZEzs85PA<vi{WmAkVyS%._M:;+mBw');
define('NONCE_SALT',       'nTpWL{>H5gg)lswx~ Fg786`ZmNu$jlYIHdPuzO}v+Swz1pUl?O(nk:DyS_ZF#s|');

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
