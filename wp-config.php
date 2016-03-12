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
define('DB_NAME', 'wudevin');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'Wo  @zV}!hUw&%1(C7 wI0B->v{Gj9oi`b1z{(|UxIk+,6n?4-{BhuQtKv45Bt=}');
define('SECURE_AUTH_KEY',  '-F_@c=h43yGLDw$8MuRB~*bu-3*s/26;YmqJe<{4T%a[j<HB|WeJ-o(ruD D91VP');
define('LOGGED_IN_KEY',    '-mxd7CTdhw=-0~D+q|9cRjD{Hcm*N^ZAvt@mPSvdJJt@]|TG|!RD7=#(pwAan5C#');
define('NONCE_KEY',        'lD<y^mR^oF+S=iCgtC|ZU,PUK|31yd2+rmi/W!+?>}|u1FB`,n!<ZoZw2yl]r4G@');
define('AUTH_SALT',        '`@=pWY~x!:g+6L1]ss.uC-,yi(@MhEe{2&FXG0}*/n]`b8w-vX);=X<2{?hm~&<T');
define('SECURE_AUTH_SALT', 'zY;<_(Dqn8elqh!92pD~QIhg]l(~&MFf1/..p-:mH.r|&`l;%L>xdobiDmiDf0!7');
define('LOGGED_IN_SALT',   '+EIo&r1q1rxE95IU48% 1J:j&VbQUhJFk]RQ,l*zTX}Qs;LiUrj?7y(X(Lx@yN>7');
define('NONCE_SALT',       'YK;cEw[H2hCH<@7ZW-|/y5C[0WGTgU4/jXH]178l@G,Lh}E E8NJ+*u4< |t(V<i');

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

