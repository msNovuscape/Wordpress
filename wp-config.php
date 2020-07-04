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
define( 'DB_NAME', 'biryani' );

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
define( 'AUTH_KEY',         '*K$l1b%.;*CgCMfS9Ht@!U9v`sk/eXH9q70d!T3ePw1;0` Wm15nB5v13^M^CP5y' );
define( 'SECURE_AUTH_KEY',  '}ubIWJzk|?@(cuX,Wx0W.I^[<OGB4Bxp-2dbaiSuWsP)6D,a_]y*whQVEx5q5L4r' );
define( 'LOGGED_IN_KEY',    '4>M~6LVQMJ<Xmp;Fk%BG:*q>|?rIQ)%i|wxHU7r9mW]h!z=$%wcgc1g[Z;gKgMgZ' );
define( 'NONCE_KEY',        '[M`c{^iz1uu1InoGr|}=!_Lc0z{`Qq*?vu ]FAbTEQ-PPqZw(!Mg3Ax1JNnNfs(X' );
define( 'AUTH_SALT',        's99Y&4_HFo|1B#Hs.,(a=-dnarWusopk2LnaMdGj p;YJx`$!=uV,a,Lb:}5g3Ca' );
define( 'SECURE_AUTH_SALT', '}!)VIhi`Y6|{r%q@m22Q`F6Ek}ttmi5w5IVVls?g6%489<IH)TTu.=pZ5>Z GMm[' );
define( 'LOGGED_IN_SALT',   '>k!Pfb_*&0`@Gd6sc^Tdx^2kgc^E}1QbsFFexMQzz=@C.CU45%BD|N6t`IwTB[pK' );
define( 'NONCE_SALT',       '4mv_VX{@2%!FjI|YufT/{$#:LK!a[w9 s3LR-u5<(_?pyi}fS>Qq_T0z+^{@t]V[' );

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
