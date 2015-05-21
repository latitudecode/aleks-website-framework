<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'aleks_db');

/** MySQL database username */
define('DB_USER', 'aleks_user');

/** MySQL database password */
define('DB_PASSWORD', 'eAn2F8bzVRe2K5SQ');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '; oMHr+7*KDt|KacZ-kd[lrowM2X`rO>T7K6+M#0R#HkkW9y><9IE1w2Qn%Y/,-D');
define('SECURE_AUTH_KEY',  'E-G:!Z~ R4+u5&&i|fTb,pB|Z@`PZ=8NRqz`i^UY,,kg2TA7Eh,-V6UxES0V]XJv');
define('LOGGED_IN_KEY',    '/>O3.pEdMX>h_wPj1$pe4m&|MM5DZLpB90l`x.4{$hLdd$GvbwTle>w^S/>v<L$A');
define('NONCE_KEY',        '@@BS$+:UgwE][*/,y?Z2*zUA?!)0b=iA8ic~ idEy(o:3mx=m2JUR|Z,.;U,,,^y');
define('AUTH_SALT',        ',j;YJZaI*pMOW-cnClTvQG<_fgaOirv0dQ!XO4zJ5KYQ>IMNNt;40_`|Vp(82.6:');
define('SECURE_AUTH_SALT', 'e(|5ngQnvl1d[f|D6<|/4>MOo@a[ECOX@^q2;SLcU>DZnm$|aw l:DF3P:#Hieyi');
define('LOGGED_IN_SALT',   '9-tS^&?*CpwSf%-DR)efC*-)sQ5i^]`]8zt)cx5$cH&AQ=K`KWk|xz&3kB@2t/J0');
define('NONCE_SALT',       'fMwy25B297q1e16wkd*g 8`|;+A@X|c:H+bT_C;B7~b||>2bhuRHQsaQT|3}H#60');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
