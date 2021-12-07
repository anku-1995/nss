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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nss' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'abZd7_/KvEbg:!)nAHw$OP{VmRT%sMn*||VQ?UEyqRbk;6E1C*1Z_(8XC}UYzQMz' );
define( 'SECURE_AUTH_KEY',  'u02unZ8Irj/s8m-OE|.)M8vS+9zd4l( kxnuu=|MG9/}:jOLVt$%}s-.#Uq(l&[z' );
define( 'LOGGED_IN_KEY',    'P`Z~?/Pl:1pr,7If]% p6!5dMdwHYUz7+&AFrHkK%N--tsu<.!6h@@g1-h49F&Wp' );
define( 'NONCE_KEY',        'I*PtE)0VPoItx[/e6)&[M}I]@8/$PJ_,O+dG-UNl%Z2X.*Z=}86[$ZgD;d,e9%5x' );
define( 'AUTH_SALT',        '#_LnGBBE1>jiur}?%v6/(c7T-6FEG{K:ih_]|%&`.=>f.0&mP/@s3x:6HBVxAmJQ' );
define( 'SECURE_AUTH_SALT', 'IMXa*,-C`&Ub1du[|lr$hlE!V=JbLBMMy|:,TvUlfUQbwUxOXxNo& [BSwCsL$/L' );
define( 'LOGGED_IN_SALT',   'dG%;1<AgCCq^Eo/uW%?X@1Bvv_[YrNv2mjK)1r|~q )9Pgv+E-rX$!?|keRX7Vbk' );
define( 'NONCE_SALT',       '86U(wevi1Fj?NTIt|r.~hyXhPY(hWn+)/!M-PD}{]CKH=S[z.fsdB}?F0!e,~kd2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ns_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
