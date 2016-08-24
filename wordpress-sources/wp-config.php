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
define('DB_NAME', 'dbname');

/** MySQL database username */
define('DB_USER', 'dbuser');

/** MySQL database password */
define('DB_PASSWORD', 'qwe123@');

/** MySQL hostname */
define('DB_HOST', '192.168.33.11');

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
 
 /*
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
*/

define('AUTH_KEY',         'hY5v3tCC@7 =Y4#l!YGalg!N+xU*c/y{y7VV$3RwQ#GRA@4y5qa;=q#(0c~J-fw4');
define('SECURE_AUTH_KEY',  '?O6%9R1:m3TiZrN-)3rzostcEG@V@-I$HtU*+V.~U;r.gr5_-wqrpjjn>Osr$vG_');
define('LOGGED_IN_KEY',    '6`j91p[EeOj216FZNd|X79eq,SO[vgk]rOk] X.hV2F=Hi=..b.p /M=aPsd18;?');
define('NONCE_KEY',        '!qj9^x`14f*2LI1saZHr?<>iKs(P6`CqT++Y5X:;%m|85w=7sM7$!as~|.^t1yY$');
define('AUTH_SALT',        '&C8%Xbv:Zbg=dmn(Ka#M94$OKM&Ph~msTo`0VPMSe[ao!e[ua|65,~FrSn5W!*Nx');
define('SECURE_AUTH_SALT', ' ?&4:)6aqKqlu6HG;CA;AX#tq_H;0$EYOw%zL*Uod|G/Eu%5wHlrFMTf|+0.L*f%');
define('LOGGED_IN_SALT',   'CyIcZ#c[J|3dzWlc}H-Rf2<S(c|jihRG4D+BHqUBvk8QXJR,yj))UU>nr?]F+yL6');
define('NONCE_SALT',       'u7Kb*R.N.1G1+df?}.[czA^-fn4g?b[WFbTF}B q3iafc b<INdJ-iW%vgXS`v$7');


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
