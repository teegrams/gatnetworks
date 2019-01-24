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
define('DB_NAME', 'gatnetworks_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'rnky7W0jCIpedc8x');

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
define('AUTH_KEY',         'Z$~6Pzh!7K|C/f[WVC5u]HoIxbc+u?I#NRE]EX5__A}%3`&Q4v#^7Ark=1Q |#?)');
define('SECURE_AUTH_KEY',  'TP[(6f|cQzeyoX$zfkvaN.f?W:E6`7Y^$[$_IoX)zwwfzzd0{/fw00J!V+cs2jGd');
define('LOGGED_IN_KEY',    'M55hf!:=xNa:E]y_oLvE8dSgv%~C3|<D7qynJ4(]-R`yjTyJ1?yz|{%_4cLcdpV%');
define('NONCE_KEY',        'APs+Qmy#_$Y|dH9X!T:G?EOm:lgbN_3!FTcN|g;/jPj I->Nn(GU9[K,U5Z5jhV;');
define('AUTH_SALT',        'NxU*|fgB^28Woo4T;Ri79KQR=8WgKp&A!tTL~ Ab_]?Tdcr<UN!F>IN)AQE@^v!{');
define('SECURE_AUTH_SALT', 'k5CyG@Q{+EjQ(:rQi#,aDq3RuWydDB-T-+h<8 Gn z4 @&hOD,ZrsD6s-owZF1J%');
define('LOGGED_IN_SALT',   '!maoY+^mL@Gx_nZ:f:(O.|.^>uPonuC@Q1q2R<t`9f>Jz;d)w yz@n-V*BS:!}*;');
define('NONCE_SALT',       'T7LCZ+6s:sSN7r2Z`8J?)8@k%tv<xnaO-%,&QfLs8;ZJ{}AN8p/kZPQ|q<&tz@mp');

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
