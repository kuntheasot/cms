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
define('DB_NAME', 'cms_new');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bI*QR<N!;d>nvQP4(r3/qtlTGM7%`>v8[r7dD:nyv SyKICnAeU5et{KM/8mqW%z');
define('SECURE_AUTH_KEY',  'zXN0.qP^-2fY`>IsnjjLJ#}cw!G}M+ZFBhi?j`P@)f<DwXo3x}@{66OC}`7kyS7r');
define('LOGGED_IN_KEY',    'pE($Od,~LC{3.U>bYXmmS9H(~AK}p|%!Nac-4XZ#;j%>Bpc`:@Y#yzDeZ)NGXPP,');
define('NONCE_KEY',        '8-9bVoQEAv0,I!/A]LDPi:+d9B/PhI^>A;7_H=?O?smeDL-C:~ENL,[BN* m/L46');
define('AUTH_SALT',        ']n>k/m)Xk]n)u0Z*y6ac2x{;f*t(yk{z[:=+t}X=i7M N]`_s0$fv*J]*H`J:<1;');
define('SECURE_AUTH_SALT', '8fm_dL$~<[Clu+t[:KJscM*tfhU439?K% HXkVElq&<lDibZZv43QIjTu?0PAeLg');
define('LOGGED_IN_SALT',   '2$!ku0d!>nZ?j%CWc9DX~VduDf,&WdbB 1zWIf)T:%TAoTDfPXFy(<cVzW~nvT8L');
define('NONCE_SALT',       'q<dI6_QG?B<9nKaRJ6>w)V_Bb^&oX ENQW$#tQC.hV.Qs+%q-#o>B{%!V{&IuKW ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
