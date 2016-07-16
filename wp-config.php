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
define('DB_NAME', 'wordPress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         '{0oU=/PX*?6O$ZL5sao%[)ODa!#{j1P37!|uF?t<qC__DkU?W+|]q.AQK^/,G@<B');
define('SECURE_AUTH_KEY',  '|%ZGDd%i0w`BZ/F=j2o2Ws<|h$L#b`Q.da=}ICrZ%Kgn%rdRMO-c4>@&R7201w[?');
define('LOGGED_IN_KEY',    'u1QD9].d3jq)aAp-nzif71&ER[V+fb.lwo|2fc8cEex#l!B.u2n;,ei6QN (3yG=');
define('NONCE_KEY',        '*iWY54N>ei v5V=B6-CahY]<?52Z&4d@BDt_J0R5+MG0931g`f5oe~H@);ib:Md{');
define('AUTH_SALT',        'ivs:3KCP@qwi6sOeG/t}`t)Spgi?7Bz+Xhn]?z%@L^ BbOj+>:]s`fpP6te8;ZA ');
define('SECURE_AUTH_SALT', '<NTvg4*)D[Rf,;0]OX)leBCRnF}$.IZAW!c.t;]dOHOn-u)i-K{BOD&`lBROk&x6');
define('LOGGED_IN_SALT',   ']z}Q~rBXmK;7#8@RZ7Jm!_A6[A?_^+Y?+j6Zj&X~ibkKZ-Ts4U{y{hG1dn/-<8:i');
define('NONCE_SALT',       'r>)w7MgJQcQRo>IP;+VOPj[j[ rf@CB3RL[bNmV#EnsW;Vc`D$P(c4g xkxeY=2M');

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
