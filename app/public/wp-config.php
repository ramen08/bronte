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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Y>mn cBe;Y2#.?|3e%wcKY{-CMNe(fGrF2l%OQs`?^@I=L~i[39&i2fPyGe<6WkZ' );
define( 'SECURE_AUTH_KEY',   'Dfow<-imc]^Qk`TJy_BGI5:^q<l*c~C=,kUL1u}ua.2562|<m]:uR%C;+y%:6r*@' );
define( 'LOGGED_IN_KEY',     'vDZte{mJdI$CA{!Z,B$.o~OGDT)sH3vr$3J=-T%YLD[1LW64N&.)h0hS>&/@]h53' );
define( 'NONCE_KEY',         '92AH~|LRhoCHA}? 5fu?7pv;!KqS)m*ccE_q=4ztzFJF-G+`5qQVq-k-cug<At)K' );
define( 'AUTH_SALT',         'hXe<L9I3,6(Rsb=((kBLCBAQ[Zfbc4j)o7ms$i^if _v{uDg+-D+Rq3q1[W7^DPv' );
define( 'SECURE_AUTH_SALT',  '`>7|)fw-[T-qcL.2qmwBX 4UW+y41CG@;7 {dyD+JHkyuH1dv.qt)z&)JFufvOhH' );
define( 'LOGGED_IN_SALT',    '%TvLtry;z{ZGBvPTu> 8Yk%J`Z+?=hj%}%U%6;54s@-E!5%yqqhzm]N]eh|;:SA]' );
define( 'NONCE_SALT',        'g-9f=>~;:{O,lH)k&Q(%a60pG&Z:+(uHFG<r>iu48&b1Yt@xoJK#Ccoj)DblILW!' );
define( 'WP_CACHE_KEY_SALT', '$Z?[31CS{iIU*R~?$x|fXU@9:2aR<B.8.j+=f{4zvtw)2P7j;2$r,.XEC{j*pcba' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
