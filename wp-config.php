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
define( 'DB_NAME', 'wisatapagaralam' );

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
define( 'AUTH_KEY',         'j+u|(nYY#TN4uLcf_IlstteE!+Rv^0bSSFc]:1R&`HA4aK?P`XWV=@[*ztW.79(~' );
define( 'SECURE_AUTH_KEY',  ',:3P/vxFyWhQKk_^;z6nc(B?bUZqocIi_$|j3Z8Aas+8neX<6 <J)QgDfoD9u5{b' );
define( 'LOGGED_IN_KEY',    '?nLR`(bR,SQamxgMP.>rFqN7 nH+3.4<!&LzSqaHTZR`kzz~LmMoP{$r_eR4}I5v' );
define( 'NONCE_KEY',        '_6h`4xe56 U:E_UolkgyNTIcb*Q_R_7=>{7*d3[[V2T6)]<2rxsBVJPmN5c%Y[vu' );
define( 'AUTH_SALT',        '!AnrDG+zvE2*,6jB^H?qtP)^V61O%:%K^Rr(H6fY|<htR[`F`EFS:xmR?UT7R5hl' );
define( 'SECURE_AUTH_SALT', 'n|%fda5nsD)H8C8Pk+MBkr4SA~<^&z^:Khb>//6&+L}amZA>%nXxnsCKAoc?}PD(' );
define( 'LOGGED_IN_SALT',   '1XlXskE||P3z0}Hl_uj#5*+&b-? Q3B]9cm.>Mv6}OFON#;R=A6!*@zwXK4cU{gx' );
define( 'NONCE_SALT',       ';XkaH&$TX5&xs(IO?Slq-:.S69!d:t9E0H=IDN?.)$GA,aiqkQhdG+z8?9;]5Vt3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
