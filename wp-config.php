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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'R$!e[t?M3_Z6NnUx:-h%sR;#f(Vk$+!C~OXNEs^wI9f%)fhj8:0sFk;k!v^{ct.Z');
define('SECURE_AUTH_KEY',  'ZIlPE^}:3f~bxQ@Df9zgbO,H.uUHkxT1|HA%pW8LX-b9eH+Bw,Bw5$1Bf/->QMes');
define('LOGGED_IN_KEY',    '5#fSV1Dj<#!!*Zj.VW(Yq1Z|Em]S[PmWlrJ]nv&2~2ks+R0]OzT*zL2=Lsub`T$]');
define('NONCE_KEY',        'baO^eyxbE88#)?:#q#0]=Nyx5ANII?-djmE3!?AS`x[_5pexCoE6xZMqYuem6 Fo');
define('AUTH_SALT',        '72[aY25VzGmBQp|_g:TP]>07-h-_~]V.fY9/c4$NXmtS(2:^:.u8oP_%Ndji;iQ/');
define('SECURE_AUTH_SALT', '%Lww:PiqDQTjOJFAFd(KE1HSCq6>m;A?])H).n^9j&<7Xh:]Op2{3`uVJVmGVqWC');
define('LOGGED_IN_SALT',   '=)S_Bp(`&J^Y~L2f[>3]tkx|Jb3gjH/L^%&PW1S*2?Q3C8-RN8fqaJt,vRzv,{KP');
define('NONCE_SALT',       '`j<IP=|]K*Paue^0hTXev9+5/pr+[>+YQWq|>d ?6~n5InbmL]:*E8EMe|hl$ipD');

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
