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
define( 'AUTH_KEY',          'cl[#<cgP[4XQ.{W.{i`s{~;vtSdPwY[n_ei^Q-l!ZjR,*MHc~H&fpbx M~7B5WPy' );
define( 'SECURE_AUTH_KEY',   'U+=u qav[n.a?;{^<e4sVhrxgg-F>X{l`Nn#aYg=Va_#sO]mCm0_zS<Wrc>n1Yx7' );
define( 'LOGGED_IN_KEY',     '(GX{PTp;&7+11U`{=>GpQV=ccL4V[$IogU*@~Gb@-cP602 vn+RQWIYc/(&a:ya7' );
define( 'NONCE_KEY',         '~duPnZ)PX@|VM@E*~@6fopDE>?imrkh8.40;>j4{</rES)hs({>SkwwvvTPDRBoo' );
define( 'AUTH_SALT',         '^[7T!),.?>#>97YJ9!e86l8I]oRRLigbIuGw{7AA,d!hdJyj%lA5(9!Qe?jjv7=F' );
define( 'SECURE_AUTH_SALT',  '{kh4iM-jW:f9>DH V&_r-1RdB3G6iL}1L|xAve9&.5aiJQLRFXAVVZGeDYhqZGFc' );
define( 'LOGGED_IN_SALT',    'll#<?;~QFl=D%K|Z>ISQIxZvaSRmj1SauMe8pA@UN f;`3H;QxgXi$lqFJe*<_7.' );
define( 'NONCE_SALT',        '@]:I52yQGiwGO53}6C]:YR+{_5Ol>[h:54#bz{/et-*+Df2I7nG#;/(;w=Fd&5$*' );
define( 'WP_CACHE_KEY_SALT', 'DWa)F4IEG3+U<Ep$O|)+MMkZokn%Ums:)HnPs3,|)-$>G%N~TU?Dl80?7_]Tu/|3' );


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
