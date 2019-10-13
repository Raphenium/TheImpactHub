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
define('DB_NAME', 'ikehi_db');

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
define('AUTH_KEY',         'Uwk{SEC]FfEl=|e1WnzUouC5:(f&BGsWuvw$ML2.a*!eKvK9bVCw4p=^ NU1h=qS');
define('SECURE_AUTH_KEY',  'c;O5-e=i78};zJF@csm^xz.`u^d3dD(r*_C5Vrb=h|RR)8TmduvJV([<QKZ32!<l');
define('LOGGED_IN_KEY',    'F*I$z#D~6lC@xWn.|/8I8yPM<T!_i_k`oTScmgv&kdZfh8AGUo,p>u56@DC#3Kv8');
define('NONCE_KEY',        ' PV>o4BI;+bfza&s@sc33uEwb|M+6FCx4h%GS-7]Tf`$F Y-G=:#0WUG,<m*egg0');
define('AUTH_SALT',        'eR52nYe8uXcz[uoPic&iV/eI>K3K)J0qsS$GrM$(d^DM`)qxvKNAp)gUY}$MHebN');
define('SECURE_AUTH_SALT', 'V2*RdjiN4;&p@>x#BuF{#hz%.ee61lrLiL7xCw24; ^p7qSajLbh.+pv.DoyavM.');
define('LOGGED_IN_SALT',   'svoy(jDLp1wSzX.1O|2:^EsEkXoHfRfXQl5zIp|>!8M($V8U{IN:ex9_Wrcj~3qo');
define('NONCE_SALT',       ':7D+IX%*k.;a_ue=j15JR%=VQ$7iOY>P%jug5piB[P#/Y4Oj%p(5eoH9<`^|`sw^');

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
