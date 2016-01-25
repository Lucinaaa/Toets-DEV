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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         ':+zwo|WP{OQ%4up2(N(ZVwit0RVA+e1Ly_+6Y?i@&bN}a;e:8`@$rRj-NKCa#LBM');
define('SECURE_AUTH_KEY',  'xAk<x@g(w[t.I2u-&=2X0=sgf_Z35U,|r~}6D7=n3Xy16_q4?Q=|2#`F.v<IxDW{');
define('LOGGED_IN_KEY',    'OYeWU:>@LDFbrG!SOWSuFfk2mjm]Mbu5~L1Xj1-c;8gl7ux`%24g)O`J.pDPEKS3');
define('NONCE_KEY',        '`$C ;zrYEB}]xp4rj^?&v*&BJodN>>i_F5B*<4T=(*F+j|gW71SEB.o/C)Agp>eM');
define('AUTH_SALT',        'kG][/UV0L:/9w !,q-6-y#OZ(S-O9| w]f)!Co5#sIZ^>b&1~vM(3kSgXmnvVKp.');
define('SECURE_AUTH_SALT', 'D<V^9Uz}8fNj]LGtNJ/_>z({[Y[>t)-C^=B0~MUFPVZy/Xrh?qC(CP*MuGkTeUqp');
define('LOGGED_IN_SALT',   'ddaW-Zm3s?^;qY7k}K3>nvgt6G1C gxNSPxgxR=HvB3]CIMmsXo2r165A}0aIC*,');
define('NONCE_SALT',       'KsAD!rYtbrX$T<:F_w{-}um2&-6sG?S~/%K2:9Nq:ezXxI3(L2.SR;)- J6`|9Cq');

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
