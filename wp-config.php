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
define( 'DB_NAME', 'bened1239382' );

/** MySQL database username */
define( 'DB_USER', 'bened1239382' );

/** MySQL database password */
define( 'DB_PASSWORD', '4rh4b39b6i' );

/** MySQL hostname */
define( 'DB_HOST', '91.216.107.248' );

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
define( 'AUTH_KEY',         'AGESBsQz)G`YP_hZkQS{+85%kj}H-lEH1{rG[mLf^8!=n4Xmr2c0OLljM%?XN];r' );
define( 'SECURE_AUTH_KEY',  '`FKp~|,<:boj,O$+Fkuw#(pHXPI0;Y=;/*nR0T 7(|xNV#k]JTkAA}MZiTpeAJ;r' );
define( 'LOGGED_IN_KEY',    'cysld6AxXATY&eN,h_`&VU[(^e!=f 8N*yjVsD{a,X8Zcdnw!t(zS_:NXdO+uVtz' );
define( 'NONCE_KEY',        'UXa<byax:R{99DRDb:,]6U5w$Qd3ruyoT1Rjc`5|T0NnS19aCcl<ThDZ*:k6ZVk^' );
define( 'AUTH_SALT',        'GoiXoMHvm*5<Q_Ik~6XMs3d3US!0=hUmDeL|a:ifID4T<]gVJv}{x7},}Nhz#q,v' );
define( 'SECURE_AUTH_SALT', 's@:MX^eV1k[sagTY2Sw2z@]+hh;UsC3sG o`Jg-P!qQ(z?56Lw}MVH#TJW-PS16,' );
define( 'LOGGED_IN_SALT',   '6BU~E|NI.EXnWVkVyo ^$p+F_fS}GC  jQas|rFT: O!{4C%?.Zc0Ks{Kjo)u0PZ' );
define( 'NONCE_SALT',       '7bda1a;2(qHIyuZv1IlWIOo:$3P-2a7/QT+f+S B8337eIzS`RFZt%3C_&c3h)T|' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
