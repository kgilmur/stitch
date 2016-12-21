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
define('DB_NAME', 'stitchlabs');

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
define('AUTH_KEY',         'k2aP71*2FC,2QX7~u>L`xz.2#[`V,)<IC&zw>dmZJ8*K>?1:5R!]z;?jxA~Y2EJ9');
define('SECURE_AUTH_KEY',  'kN{W5aK P3m _t|GO4{i5*HSyXIx:+uw82kR0`#z 3]++Sasj0yi!}rZ#mv<g;ZP');
define('LOGGED_IN_KEY',    '5~0=!)>E,qd]W=nVcxaAD(DU$7fg:B`aTY=E#IM@Yw-d&;tS{D[aF<Xt_z{Xuj$2');
define('NONCE_KEY',        'mmSu,wyKinyfpsM&;b0(!`eU?se>cW2C,`<N8LhC&#V0uIk3-IJM3(4~AAr*BJX[');
define('AUTH_SALT',        'WJSX2&YUT0hCftOZu>J!2u!bJ<xEtF0$OPJ<KkIAK2(fNNDHNHwL_v.payB;rGkL');
define('SECURE_AUTH_SALT', 'jBB!NyZM4ITlW:_0>B_WK{LV>>G%*f/g|=M -nauqBn{*]A?A|}BG7e3J^|w!-=`');
define('LOGGED_IN_SALT',   '~05~3r;_9=MDfYVWjfx7lm<`9HmJMuO.ivNOXm+D0<Ip~9&&DM8Fp80!]|5/r.kf');
define('NONCE_SALT',       '3u-u{9?1u9p){Z?6![WYRWYMM+8Fmqq;;)|aPOm?<GLXzaq6U68cBHV*O?[CV5sE');

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
