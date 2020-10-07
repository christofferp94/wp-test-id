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
define( 'DB_NAME', 'wp_test_id' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'hGuX%#r4U+ZK9|%Gn?=48PH.btt vcoS<FYajlQt9XIaZxpQ3+^)X{$OSlad14=x');
define('SECURE_AUTH_KEY',  '#&=&fr3vZwbL&-xn&`L)8`zWYH[yKv#V(0C|:#]r9c7w#id3k99*lpC{H(+P}ZC{');
define('LOGGED_IN_KEY',    'UbAEn@xTRkI<8)WY_Uq1 9p%fQUZ#Gga8+|H[Am38-=`n+(hfb9&CWMHS(sfgGlF');
define('NONCE_KEY',        'PD%)y9#0xP&lw<+*w9QoN%rrSyEgWJU]1lofyJ8{vt1+0+a/4%rqxaZqprFX8b@^');
define('AUTH_SALT',        'O+_yEmR5e[7^fo_{~^Y}s#z-y#AwBhoR,[5k1%~i:-z9vLc@+&P<o9*DPgS[AXe7');
define('SECURE_AUTH_SALT', '|7-kcb<&sSpONo~)kWk|o/)Do=9J:qnQ)9[}r.Vn@zr+TdbDi5+*pWWB__Ac:OyB');
define('LOGGED_IN_SALT',   'f=H3Q@]xiBuj[UvJi7{=]VJxT]Vr(h@#Zj_R}F4_56o]pcyl)sU{Zd{=lG-af:|H');
define('NONCE_SALT',       'Trzzdw-2/GJec@5UnZA+4Y9rf4mrPG,@_&,`>A4bWVV{[ft2$CK.,Z ->IC^$Icq');

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
