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
define( 'DB_NAME', 'henry_javangwe' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8jin22iZ5i:$:Y:j%3egIfjt?$d=M})9ntC}v:p,yM#R`ex)P 6j,NHG<4FT:{HR' );
define( 'SECURE_AUTH_KEY',  'e<*Knj.~?p|F&:}H&X#$l^]^]O_kk]8!imEQv;I2{_dUF*.tlBoOY<&*Qus;+ey&' );
define( 'LOGGED_IN_KEY',    'RJ~bGoDMe)W[w$RZ!M42Gn rL2M`^mq2XN*FpyC[[@vxnchk%+GaO>t,I0+tSew!' );
define( 'NONCE_KEY',        '}tQ]IJ<* 8jmplyv8xw@2Lj%)!,<8JLKle<.Pw:li_7qB@gC`g&X.*)1kFa|Z)1l' );
define( 'AUTH_SALT',        'v @5SS|,>*GcB-.ki*@/n#:sG)Mk,S,K~HJ$f&]IMf:~r:7^M;i*Uyj@ G %q7V>' );
define( 'SECURE_AUTH_SALT', 'ZbaMfL`SI(f|jPrUdR`,$_K],ZwEU7Y~yonsKlJ6)G]BW)O}tNBzmx8(MTlyHD1S' );
define( 'LOGGED_IN_SALT',   '8qg{&kYq*wn-I%=!bpb%XT[ t, a^ZoG>;b:t{#m^RdJp=M EN)Hg<QxxT3zjQI#' );
define( 'NONCE_SALT',       'QSrX#|bgINmj@Iv;<%6F_S~Q-#2i,DlOC4x}#Xvxl<x{pd}{/c96kL1yVfh:U%m4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hj_';

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
