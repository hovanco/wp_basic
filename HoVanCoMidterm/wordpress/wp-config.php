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
define( 'DB_NAME', 'hovancopnv20amidterm' );

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
define( 'AUTH_KEY',         ')b&A{2F0Tva|?XxQtI^YK+]oyu+6o/VnZX9R}Kg5sWtW.Ke.(*2#fi%GF$[9<CQ=' );
define( 'SECURE_AUTH_KEY',  'u`T8$13]a@-%Wn15`10QSs&$WNZRT4>2mHvwUT5FfI=0Fxd3qc}4Z@P3kLbA 7z&' );
define( 'LOGGED_IN_KEY',    '1ucnbF/zH|W!a44NXAU3HaA9l5,_Vnsk~FR~V.k/<c+N.J`M&F9j{~4{GJ<Oq%iG' );
define( 'NONCE_KEY',        'B=ySGDcg-S/l/K:[K<66hEX[RH7=Tx,aLndYd9qu+uvDbNz,y&IWf%oepb>Lk0$0' );
define( 'AUTH_SALT',        '2e6t^?O={)s;6%>P_yuj]9-%3e*5W(9Zf[l,.PbJp*KAb[4#WT,/2mN}~cm9V_@X' );
define( 'SECURE_AUTH_SALT', '|5ET7R!$.q8|xoq%[fK2}Cl/nC//2i3#3sSnVN2_B]InB)gEFNW7GkR7Xk>-qs|0' );
define( 'LOGGED_IN_SALT',   'dYX`0h3GQN(!TI)t<#sJTC?2mE0N ~h}fuY$CJw3L|$CnQagT|,wF~7G>!Q)sx~1' );
define( 'NONCE_SALT',       'E;=EgZF=aM-`W+:p+P<J?l=ZXBOF.*<rWwdMhcOIuvt$o=j6tK(;r$EZqoC5-66n' );

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
