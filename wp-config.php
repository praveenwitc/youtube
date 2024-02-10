<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youtube' );

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
define( 'AUTH_KEY',         'Fqa$}vbpBmGnk$_gu5] `JwnirY3wdDmb$>rV+%!`5/?mJkal]r_R-z:0[bxroC_' );
define( 'SECURE_AUTH_KEY',  '18NY3]Nz1]=u<=OJTa+tIAPPXa<+l/w{.K&wiOjNA7A|woR/8S}.CRzO=RnI`W=J' );
define( 'LOGGED_IN_KEY',    'WBO5L^T7E@~_E<s&Wep::Ih@3B?yS9R~8gu^|xda<U04cyy`V&lEQ@F.bkp,wiPD' );
define( 'NONCE_KEY',        '{Cnaa<-#>{I_x&##kooRRRr1=1+&.H=:%>nK1Ye6u#F?>!Rh3ZV?f85N3P$&9c<f' );
define( 'AUTH_SALT',        'ufdD$Sq.?fmC=lo1-evN52a*&l3&Lc @cHknxvMC*?z*a^xa!D]xZ^F7mcZe@<YP' );
define( 'SECURE_AUTH_SALT', ']*<<eBS6oL-U2a`ebDXy`dEK^3Jh#+c)HQOoyO`23&Q{8MWP(bqOat`};k~e}CIT' );
define( 'LOGGED_IN_SALT',   ']nmlUfUAW1HNOv;aANz|<?M:3zN(J[+{2,GUBIKb}`[Q=[3M$o-x%2]|?k`)<}7d' );
define( 'NONCE_SALT',       '<z jwS*@%RnJ%wZdK)+nOWPfFl7}/`G^}X*r4j=B[_v/p!H=s@SUnowK3|a6%@MS' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
