<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
define( 'WP_CACHE', false ); 
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "ujianori_laundrymalang");
/** MySQL database username */
define('DB_USER', "ujianori_laundrymalang");
/** MySQL database password */
define('DB_PASSWORD', "Ardata2024");
/** MySQL hostname */
define('DB_HOST', "localhost");
/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');
/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
/**#@+
 * Authentication Unique Keys and Salts.
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
trim(('wp-salt.php'));
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR', (0775 & ~ umask()));
define('FS_CHMOD_FILE', (0664 & ~ umask()));
/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define( 'WP_DEBUG', false );
define( 'WP_PLUGIN_DIR', '/home/ujianori/laundrymalang.com/wp-content/plugins' );
define( 'WPMU_PLUGIN_DIR', '/home/ujianori/laundrymalang.com/wp-content/mu-plugins' );
define( 'AUTH_KEY', 'N7PzVYuTBWWAt5BRApmGjuN6cJjNo3CTXezhNRszhutCyU08E6s8nBPcH8CFHfC0' );
define( 'SECURE_AUTH_KEY', '6ei2KjXhBqB0IqTsNSEUqCGuJDYYto6KwezChGHQTdyfpgpmIotbb97aidIKsIdE' );
define( 'LOGGED_IN_KEY', 'YQAaUjrLIdei16pb5pr7xh3Lm6R8qwHdEbCeuHGTEqCn7Dd34Azd5ee4DCy9qrKs' );
define( 'NONCE_KEY', 'Lw1ImNLRdY8pdYy2Mc5BzC5KQ4Ev1FUw8v4D7y2YvReVQ8pSSyLim43KsNtnd3SX' );
define( 'AUTH_SALT', 'cmrf4BVNeeTxatqRqXMgQSHW6ItgWsAvVKrFanBXgh2TADiEr8mEYjgtjtw19pm9' );
define( 'SECURE_AUTH_SALT', '2aj5869PFQHP4PAfYUiU4x3y8xApg9ESgy90Hod5QCb0ovRYvSYjXbD6LFADpsEB' );
define( 'LOGGED_IN_SALT', '5m3NtmKHYTdTdSoEIhdqMtfvjKvfbICTuJTEQXUmEaBfWxsf83U2nhPwdxBJKH3W' );
define( 'NONCE_SALT', 'a5Kp7Dp3QD6c4ydoWyLU3wqtF29qmUB70RFPWvnqy7ya2Eecp4PasiP9XPP1XzQB' );
/* That's all, stop editing! Happy blogging. */
/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');