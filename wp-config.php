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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Jhi13zEnRq' );

/** Database username */
define( 'DB_USER', 'Jhi13zEnRq' );

/** Database password */
define( 'DB_PASSWORD', 'Q1jhlgahLh' );

/** Database hostname */
define( 'DB_HOST', 'remotemysql.com' );

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
define( 'AUTH_KEY',         '.C<rxPTTZWROZ@*5l[rN{i>vN*Rg<fExwG[+>Q>wb<2wiZVDnNbcPkJy9 *16_-{' );
define( 'SECURE_AUTH_KEY',  'KIoAlMJzvLruFR$*907NxKZ(`fmM8f2Nz_)4EG$^g(OmYa~}0=FvQ1@<5Px{u.(t' );
define( 'LOGGED_IN_KEY',    'yChj}JQpA;Ill@xWeT1R|5~.B<SN)m#,GZOYWCjZ#J$Z~~AnYb#mN+FU:>9H*/6#' );
define( 'NONCE_KEY',        'l,ED|h]Hz8Wk%kI<H(p0*If=[uEr]X>2S&KY8s?!lZ4bD>0rB>;1`e1eY@e]<]Rq' );
define( 'AUTH_SALT',        'Ek9v>yVogj$`rXaN|~5y2hN1Nj,{^).hN{-Ap*S }dt8[28Y:uLXZ<c+O5KeQ*o{' );
define( 'SECURE_AUTH_SALT', 'ikd,8.Em-Y3`gsB[h=Hl2pCD~L[c#J@+O+E!KH+Wtl*|EjGW,x)9P<as^,Lh7k*3' );
define( 'LOGGED_IN_SALT',   'jjF-~Vye[_RJ{dQRM,8iqOm1,USX#TXfFNLM1`J6z`{}LV_lxxk:M7^%}fu,WH%9' );
define( 'NONCE_SALT',       ';Vld3Ux.&CB2:9&rR)gS[5D}xvDC#19K*}w2{d7w0m$hE>l#soIk/VgoQg5&Q$:}' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
