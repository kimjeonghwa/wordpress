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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         '9w^.gSU|Mo&= Y:3xa_7}JQd2,U,g_*@C1;%_gEX|MS!6yqMuJj&(zK?E4F_&Lfc' );
define( 'SECURE_AUTH_KEY',  'f~QjBe]:(6X&i}627l>J*#$I}mI)O+l&$qSMGUm{PUs:T,F?0=qq.+.sZA=/]*T-' );
define( 'LOGGED_IN_KEY',    'W_6})aRWA:FxQQ)/`NV2z^kXk37atURJm+ !HsFYe*@}!1cFChL~b{5m.I.;AR<O' );
define( 'NONCE_KEY',        '.Co+|&x^=Qc2M $RS`!-wNuY*m<`,7!$~q]e,#/|nSNSrT<:F*j[Kyo^Qpv,HbeQ' );
define( 'AUTH_SALT',        'RePMMu0;5^*@`<tkduPjeZ&23~2 ^lelXgNGHKTivZ~y.J7Dx+I/&VV(>f];c0T)' );
define( 'SECURE_AUTH_SALT', '?4-9tc9YFaw#- Oyw861(1wcWk2$]FM((U#W4~;B,5#-T0w9c!faZK7t(5PwAQ7V' );
define( 'LOGGED_IN_SALT',   '0O4n9kc6vaEp[poH>oGupK-3d_MX!pL{3$k2&)6tq(K q=hfXEWW)7J>{9^28Xv%' );
define( 'NONCE_SALT',       'wtBGw!Y(cz )4==UB1x|FG=wGy6g`X]4,7g,)N6LATDGc0&cb~{8TCvZYZF5kP]w' );

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
