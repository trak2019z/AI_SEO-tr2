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
define( 'DB_NAME', 'kicor_jaklowic' );

/** MySQL database username */
define( 'DB_USER', 'kicor_jaklowic' );

/** MySQL database password */
define( 'DB_PASSWORD', '6h2G4#2*K*2d:B_' );

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
define( 'AUTH_KEY',         'Pu}:u%{`#O%_*1!{r}mYX})l{A|^;|y_% &d.]G{rElK3?8?6dw@ZmvmziQjjI*A' );
define( 'SECURE_AUTH_KEY',  'yg9,|L=YR@f=K^h?;x(h-!%YUw$RpUm&#?iLyJMzv[_%z!oB/[CKP;~$/o@5Z0N3' );
define( 'LOGGED_IN_KEY',    'V0{m`yzT1;VHg(cJ0G11AD%D[#XnC0Q)4:-hXE)|Z9wql)7~3g;?*OW8*R+gFnqf' );
define( 'NONCE_KEY',        'P#{B(7jT7B:8^@`{|R3@F*~|d(@ |yf}k^&H(cQB$R/?QR]s$mOs**Cn,5*NjCd`' );
define( 'AUTH_SALT',        ';nr9r;+`Z!B[_Fed]L 6Yq^yIf~&rW_g]4^M*&2W*tI?@}I[T!;K~-3,F8d{+~bS' );
define( 'SECURE_AUTH_SALT', '+)?XI.mL=4q^8Al<0B0ABJngElj*VaE,x_MXY;Z3p=bZoHt0/w(q-6b1=>X`e!&8' );
define( 'LOGGED_IN_SALT',   '0UXE)4aYui?o(zyT|D6OvU]Rpe@m//lKlkDmLYv u:}.+ewp|)vmEc.-^p)~vs-.' );
define( 'NONCE_SALT',       'ha[/~y$k|?zkL8E}wjsfOt:N{*l<UWQ43DKUjy;zuE^&dOz~a,[PM&BPN!ycQBRQ' );

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
