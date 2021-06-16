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
define( 'DB_NAME', 'SabyasachiRoy_db' );

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
define( 'AUTH_KEY',         'Nuun`{uNV`WwP4R]At0s{m]EyohHW6qAVzh%.D LebGcjmA$OH//$47$!un.ef(M' );
define( 'SECURE_AUTH_KEY',  '%XdPG1{vxaHHWfcEoX4qH5N^FL7!gN`YWCo%4~gW4$t{G/K *P0W;=4O;/-a&CxF' );
define( 'LOGGED_IN_KEY',    '(q0ar7!c)ua7N0ZpLNZP4@m}w{twHZ.mmO3wc@( p|)V&bzcwWSb37l@}zKAqXqc' );
define( 'NONCE_KEY',        '(NVe3 ]nM<i<(/Z8IYog-/~%8Em]iRJDT3f+f]9[R vIV^.!|V%t+.}l:n^shPS[' );
define( 'AUTH_SALT',        'YsU`aA4]>xl>59`Q5`)Qbttmf;4;[#!ilO#lu+B[B&%X.~&U(WUfykkZ.E:v4,xd' );
define( 'SECURE_AUTH_SALT', 'qc  /s>$,Fr8;K.K~9xvG:IVC`M#P%@/bs{pce(rLsVv;uB vs.c,GFVFJ16`P~7' );
define( 'LOGGED_IN_SALT',   'Z+Ca3X!L8@yOrlp0 {k /EEwcIOz,%{Q3yEf9e?.O:80tIC%!jkG^{VhBLR.G3=k' );
define( 'NONCE_SALT',       '57nE{6gvnmn+tO<??4k<Y)/SL]-Bi6|Mi&%VNae0)6W#Y|-Ff/]rHjH} b:R50Vl' );

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
