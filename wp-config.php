<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fitlife_pro' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'ml3V1j%{bajqC$_A/GVwCROWJln7|nhk,,eVA-UHl/FLErRPw{e Ip;] 6^w;Z~y' );
define( 'SECURE_AUTH_KEY',  'U]|+iZthmKLlm^hIjDR.B )^u1EP|YF9h>.QFW.1_@tsF%Y3:[RScO8)?bXttAtQ' );
define( 'LOGGED_IN_KEY',    'Xj,~h_ToRd}d #H6$C;PTwWPMU#/]I!vJRf3{_T;bel8TRRMe+ITLsA,4vwj3`?D' );
define( 'NONCE_KEY',        'sq<k3aAs!WY(c(p>ZS8uUyzU9} tDMRZ( ovG,K#efr6-dj2vX_^pQn+P{Ak+yVE' );
define( 'AUTH_SALT',        'CnXh=Oo.3!.xQs:AfxJ}zThwz4ulYX!-SyVNTi_K++MU46M@Kxlr]fETLEGMc!xM' );
define( 'SECURE_AUTH_SALT', '([WU]^E7/CVeFjBPSf5^gj* /AV&t<~)_9w)~HXv~5wV9t5UD|)GN3S4yg`L,j/f' );
define( 'LOGGED_IN_SALT',   'w}w1ykv:PE%@TWjP?MEwkg:SY:9ZNw{Gh:X#/-t8ci;[tF?C={Ji(L3UdT&n*~)H' );
define( 'NONCE_SALT',       '!*3n|EEZo/+.,1sxQkE!vAm 15v$=rd5*KUH~u^`u=f=P=o#b.Rx,*~6-qmLpgmY' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
