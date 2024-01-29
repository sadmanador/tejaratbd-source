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
define('DB_NAME', 'tejaratb_wp49632');

/** MySQL database username */
define('DB_USER', 'tejaratb_wp49632');

/** MySQL database password */
define('DB_PASSWORD', '9!S3J@4eps');

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
define('AUTH_KEY',         'kaibkaxkbjudhdxrnb3ypjhjmj1xvgjrg97s8v1sfvlipurvkkilno4hrglncfyy');
define('SECURE_AUTH_KEY',  'byakynb9ff6nx1sclqfc0uh59lpr9qvkmx1ypl7zmgyqi3rglekfmhukhd3lsqxb');
define('LOGGED_IN_KEY',    '3ph5ms72hmfxalciv2wmgttwadbgg2x2fcq5v8dq3mycvwzzy10y7dmt7z1yhtg1');
define('NONCE_KEY',        '7o25z51vce64hwxcfvehwcy6bmohv9zgwaukxa5i9apbshzjqggpff6e956xmei9');
define('AUTH_SALT',        '7srxzo9uq2hrpbimlqssuoqvrgv159k7cu3x2abjs0j74mypinap2k1mdqj6ibhr');
define('SECURE_AUTH_SALT', 'vuza6kbeo5zknzfd6urf1giu35edwifsgtlv5zirxneqj53ixwhfp3toxkt7ef2n');
define('LOGGED_IN_SALT',   'fxdsogg3eszt7tsupa5eep5eexbokxd7fj8lq2ctobuarnp96wctdfc4kousr9zg');
define('NONCE_SALT',       '8vybjt2gycw1rvn8im4zw6carfryimtoljdl0r5jne6g89kwysa4ujyouaglyf2u');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpdx_';

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
