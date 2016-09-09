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
define('AUTH_KEY',         ' IL4h<rF1Cx^^QH3mPdhdj|@4@vM$;p>(Z[Uff`Iwi~8]y/kK6X9n!T;t8TYt5}^');
define('SECURE_AUTH_KEY',  '>~yUTL+p%F-;?t{$y~L1 C!]y:T=Gi~Z%u+*%6gZ78CsJ 5ra)w$jG#0YdIvQ/+t');
define('LOGGED_IN_KEY',    '$fR&4<K{|Xia|c(V~G$-@Y9QhO(xyvK-),!A?cKtkMPtK66p:73$h93%CH#yS6ZU');
define('NONCE_KEY',        'Q3$=$i@l--X!P]g`mDQ^(+hjvZ9>M^km7+`3Sv.6su1N8|{d1R]D5CdK}YJ@)L:,');
define('AUTH_SALT',        '`:^gx)>WgbA2|B_$W#x7XF-IkERdd+fQ$TN>,*sz(9-m6}r4RAL-~Ai6(EyH/}C8');
define('SECURE_AUTH_SALT', '_%TUS0v=KAR8n?k.!R8z|DmWZ=95q1};=Bg%)]ISy*lz#RBc&8(Uj,(&}H[{lH-z');
define('LOGGED_IN_SALT',   '=U+WiR/&bvcA1b>3?17?PeL:nkFD2o-JF*#h,Thi[?C)0~iT+@|=&!F__umQ{NO)');
define('NONCE_SALT',       'Y38ZEI x*6YYZ>-tm:7HZj{?D^qGWC4z]MUL<-a!9+l:I+M?84<ig^f1M*>E+/6F');

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
