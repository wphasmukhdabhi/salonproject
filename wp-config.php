<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'HAIRRAPBYYOYO');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

if (!defined('WP_CLI')) {
    define('WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
    define('WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wBtCQO7lhJQlen4KpR6oBdWrBQalDJoMmsEkv6Tis5H4jQtkDRFKo4DwfceNRwbj');
define('SECURE_AUTH_KEY',  'qAQxIKCPfugcOl4dC3tmOlTfcX2kX4HP6Ynq20eWsUMQAbAzZXdZ96E07VRzYFZx');
define('LOGGED_IN_KEY',    'nfTAoYOKjyugWJwVI2Y5je1L7lpsbMljDtvzk7WOtuULG5r4eL4bHQ4tsuJVtfA2');
define('NONCE_KEY',        '2BwV6IAyQ4MmmWEnkWW5lneJmm1OTujx47BxFEJtstOZCixm65pD9YygmKon7Aid');
define('AUTH_SALT',        'qkqIAiCGXjVGDoURjCt8dxKQhimwYzWYbR5oRGYbqCyDeoDGrAzhhcyeix7vfaWo');
define('SECURE_AUTH_SALT', '1zjaetGN6v1Eaa44rK3eETDtwpnfglVYZ5hQ5qysuk6ZFz2zrnoY5dIDyLmEtcfr');
define('LOGGED_IN_SALT',   'DExHihA9hmtet0qR1h0He98YXEax2lAGdLGPG7kSyo0UwvhAm2Q0MAzp5pfBnXW8');
define('NONCE_SALT',       'Xh2YAQVqP2A0oMRluz3KPdQxiz7RTVUiUA8j6gr4GBPttFrX2QHVVpk2P2QRgEvl');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
