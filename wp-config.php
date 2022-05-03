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
define( 'AUTH_KEY',         'IY_@uNHO[# 4~:%WG>._Jk^`Jky/{% cfCTb3S!RY5nn=DtcW_.#dimz:1IM:-YV' );
define( 'SECURE_AUTH_KEY',  'So}?1iTciN)FX+&7`B+=!w#dX!^Xa-p5x>YdO`=P^~(!H($LgytK`1_2(`w/M{=O' );
define( 'LOGGED_IN_KEY',    'mdKVJ|-> //@0b#xg 9zCe-n+ Bx-kI*3lX`:P=qU^%i |lQ;ms#_B%-T+Tw(@xX' );
define( 'NONCE_KEY',        'BpYHQ9Z?Z~9Mnq{asB??*bs{hO,|>Bpk~u$5O?elL/#+Sj8JO2]tbNz/#]eYo.@-' );
define( 'AUTH_SALT',        'E3z~_]^`Yu#tz{_Cbz@VSrg%&G<JsSnFLkt39U(R6]o|=wA88H<4>*q3].[4o~dC' );
define( 'SECURE_AUTH_SALT', '$8hMG^fbw63{GXcHhV[EE*[6j1f|YW<v08Y@g3&QyU$99ZYm@Vv=rViSH|$}VA{9' );
define( 'LOGGED_IN_SALT',   '7ZfsWOY8TNsKcBHD+56XZg#bb3mX|x mHHD7F0+JK+bmd,e7J&l7tch{XH3Pby~9' );
define( 'NONCE_SALT',       'PL]L3KeZY.<$nRQJd(tqM|F2wb@qoAz h9(SGuLlx{.WY.k:2M|osZ,2-b*^A?C7' );

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
