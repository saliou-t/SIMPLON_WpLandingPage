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
define( 'DB_NAME', 'sendigitour_landing_page' );

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
define( 'AUTH_KEY',         '$607TI60yu[C0 ]UpIG%Y6*imt1,r6!x]=!(5MnQ/o;KE>x>]~o(=S1w@OZz-QQ>' );
define( 'SECURE_AUTH_KEY',  'E3%o_0~22G7T=s*q9_fh_C,KhclN6/LufIFFXZILT<Z/pGH.L/7WS&P&y)/Zr~9>' );
define( 'LOGGED_IN_KEY',    'j.yBp(,+_6~V1~N>dF*8n4`Au;i6+iXEI(t$j!KolTLJ#c8J2L(@F]O@$KV3k1Ka' );
define( 'NONCE_KEY',        '72>.4pC<nC4?sfmCT0BS8;vdrjf}M?e#j]J8Dsc%~2];GOV(!X^Z}<4h|.g>Nt8|' );
define( 'AUTH_SALT',        'fF=$C3ItGW%3jL?JNL;]5a>3K_GUWChxmSK*8|O*Qp0gXRc96g;yY:N HL)gb_:!' );
define( 'SECURE_AUTH_SALT', 'cqL~MLjr>D!NIZ-fxmc)j2}FW|Uz,&;591TM6jx);R<?e.ulgQ^3A&q51L964F-v' );
define( 'LOGGED_IN_SALT',   '&=ckIB;We[6Kh>4]g1=f8m{MD^`z6ktp1@1S^CrElst,a]_MV#YjN=;aD*rUMu3o' );
define( 'NONCE_SALT',       'dM&J?waPC:-[^`}Wp$a~X8#t%k&Romj<([0}GN,!Z4Vf~%e{:LLp%VgadMorIhET' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sdt_';

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
