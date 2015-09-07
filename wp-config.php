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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         ' D3$vdji6t7|t?C_@z}XE)=yPqZ9$@^b=:{`fX4G+sbAg*]x(F-1z|/S7weJq[|d');
define('SECURE_AUTH_KEY',  'SH-q<o=IPM)t6K, 0PM+!1_By#NP@;S<=Sf^^VGvpg&}gMOXJ+.5X^e[h6C9:!e<');
define('LOGGED_IN_KEY',    ' 9?gsysc?FU==>DTSr}`P6R4u-{>]c=JS*`%|_T2HuUY=fX-v#Zg:|Ec>B/n2Z,q');
define('NONCE_KEY',        'qBPEw:ckT*I&0WI#3_9^<-X-_;gXqGZ-^4:`jmb>.RAE|B^U6U6 $^VD_:]XB|0 ');
define('AUTH_SALT',        '.|FwdG.-5i!)M1RdXQzCQ<CRjOHh%^:x5`$&hbxE.D7G^H<c~X3G}t%t<B f&m5J');
define('SECURE_AUTH_SALT', '(Q/i|g1Hww~I73<x06p89-q/;vB<b[.~l;)[%NJ|9+giPzp_Y+t6A`?l;pv+/6{>');
define('LOGGED_IN_SALT',   'iC|,@22g`j+CA2WEl2g_$_kWVMhl*]>-<4.pt Xf%GO d[Eh2jYSj.6Hkm#^3uAB');
define('NONCE_SALT',       'Hx~++P,f#W?;lxEo:vKnc-1f%w;^~VVnPy7zC+heb+j@o4oG|Sg# X.1O]|$b||#');

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
