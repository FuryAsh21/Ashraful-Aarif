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
define( 'DB_NAME', 'Ashraful aarif_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'i?_b?GN8_1Ht0{]oR?5.#<8em&ne]l*GJ^FAEmwnQC-^/BL~W!HWj+Jwb^@]#`%T' );
define( 'SECURE_AUTH_KEY',  '?iUIAT}}#<hYWt4{)wySelwDz,DHL2ao?U3k+$im@~Bx|W|i,[Y5HhJnN-%U.IY1' );
define( 'LOGGED_IN_KEY',    ']E&txzF{FO6legM/r^@pEk^oGcWfEod/|FNCKdUP?^.}3=%q/sXd._zjqIq0nd!<' );
define( 'NONCE_KEY',        'a%awhPT)ugv1I8(o-r:+E/%73 G!/KWKQaRg%.,~O5jqP%6es)C:nUh!_bM4[a91' );
define( 'AUTH_SALT',        'l-:+g2#r%@>`Xa}7)aD5hmUBZKO*/ f#aDZ$^Kf?OJ}JE=uM^iMS9dnM+_8H!>,;' );
define( 'SECURE_AUTH_SALT', 'EYb)%$:p]2<%ek5_p^j5Qm?<q[w6mZ)Rk,t/*@L3P)(pC5u=yyWx$xLVkux9Ze2g' );
define( 'LOGGED_IN_SALT',   '%dxOD%hBli99FzfZ_rewli-8.P%+;]rJZVkp.zSMuS[NWY-/0xv6LVOq^R%mj4Vi' );
define( 'NONCE_SALT',       '6.-V`g6Jze-mKX8rmSu.,inostIxI,s1`,h0%Jpa<cstn]D]^}`<uEuopR]mMbjw' );

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
