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
define('AUTH_KEY',         '`oIoX*oKu4@-,HvA4 _t-eC2<;a4WMyj$4?NEAfx}5vlg^#D{RtD64Qq-9.<-5Kp');
define('SECURE_AUTH_KEY',  '+9k}LzQ^=hiqmYe$sDCvBay~lqXR/(j=)U8ff.L)flzj,57ZV )B/.^wYyt&N]x,');
define('LOGGED_IN_KEY',    'U,up7^@}kJg5vV$9L]{WYBc=TXZ9JXn0/EzUi]US=yi>I;$`RmE2@!?%HlG@eNEe');
define('NONCE_KEY',        ',uu}AU0/Z,xMV_j!w;Z9h,#O;T$AK2MQQE-pN&M`8En6!l/xI,Mq^c;3ZzAql4U[');
define('AUTH_SALT',        ']W0#bG7 7{%LV(]tq[7HmELc=9[+})+_$)E]_2%GIJXSSicPNOf3Ao/[wwSu8?ll');
define('SECURE_AUTH_SALT', 'CQDVGxy5y`#z&cZGS-!iMi?wGq&mT<qusuuO8e[4J&TjhN%;<K$@%)kE4YQz?Iwq');
define('LOGGED_IN_SALT',   '>nQ7!jK!x.T#`(j+eI94ztH?hWPiX.^4uZ#52=#4cQW/^{Z+@i/%5bIIR+qRF9A9');
define('NONCE_SALT',       'Yb*?kj9(_MXBtI*ZUqx.q;wzrFN+?(H0-6%FCRUBug/?pQ@e#.PjcGWfDzjf-I$l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_testsite';

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
