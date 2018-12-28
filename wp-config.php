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
define('DB_NAME', 'godlydreams_db');

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
define('AUTH_KEY',         'qYs*6Qr`cN%j7POexWn-AitWYf$xj:D/7itgP[AC@8Q9xbd_iOx1T_PgJRa_SzZ_');
define('SECURE_AUTH_KEY',  ':*e/Y:Zj@7(CVoQ<s^I+#C1dn/{`^2_!jL;3 Xp*nIluM5giG eG?uq<F 5/KnBJ');
define('LOGGED_IN_KEY',    'Sg:X1vL#f3zI)u{NAA6sXwB1Vz,ih1JO()kTMP4ml]Pt]EWG/J#-x18tLjnejLF ');
define('NONCE_KEY',        'MZAUjkk;]ct#(6_0WSLwHy1#]to:mrEuc}y3Ze1h(P9Hsd]KV[t;KP4o5<k`pE8:');
define('AUTH_SALT',        '1r]#p8ze?FEITP#z~<ycq<Z:k=PYwn~sm?ZCd(#yAEc5-3|?(s55kqp JU^ZrCXF');
define('SECURE_AUTH_SALT', '4mHH3M82FG-ziBie{:Y%$XM11d5u}v>KNZS/ARp:_;*StsH)+r+#47egfs+cYilt');
define('LOGGED_IN_SALT',   'FyjIdL>Nn7#{m47^0^f;XZBQ7eqmFo;7c;jg~[pJ5f,=N %A:]~N#D[D{p@O3/t?');
define('NONCE_SALT',       'behY=oiR`a^S?#<_=Vz_;{BF:~M`}FHis3fl Df:sF:2amlO:{N@5xs|o Qf9yJ,');

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
