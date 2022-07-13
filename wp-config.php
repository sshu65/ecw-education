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
define( 'DB_NAME', 'comsys_ecw' );

/** MySQL database username */
define( 'DB_USER', 'comsys_comsys' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pqD91gS[0.' );

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
define( 'AUTH_KEY',         '),eV fs{NQyQ#!hc)pdMUV)nx/alhY_Q)^1Mm,4nqN c@&$K7!.JTcO Yrf&f5lD' );
define( 'SECURE_AUTH_KEY',  ':G{rX+E|K[=;1HDg88iW{`T9[Ej87x9Z[ Om$.>Yx3)I1m-jKGRS`^Ta|K4N7{bN' );
define( 'LOGGED_IN_KEY',    'Z~9[6i)C`;TbZSMWF[2hmo-J+$pAO!)!hOYrzzV-:<t`HND0hq,R3:oJ>qC9m[Nc' );
define( 'NONCE_KEY',        'roD.E2uemYdDN)JJ%:n$SY>LSRbEZ5LO+OoL9K*krSywU3c<Cw#TO)A1jG{JJ*w(' );
define( 'AUTH_SALT',        'H4]-3*Xb>@iV{gNJ=OHLJe|7%/Ctc?k.VD<XpC8d2|9>^4?_xRndvs*Kvk#/#Rkd' );
define( 'SECURE_AUTH_SALT', 'A&s[A 6F-j-o8nbx>t+QkFtdSp+@ozergm1w|VRY9B<m8YF[#X69}[LfC,HncNzj' );
define( 'LOGGED_IN_SALT',   's2k}Rn[MGgZd:ruF:RE@)syo`NJI5;tU!h@1;IOxAv`v //H8Ym!E(Zd*.3oFrT8' );
define( 'NONCE_SALT',       'tDqF[HixUVg2E#JhuN;6>k<9suI vV^ot!Wbd_EHo3a4A.=m/rE6kx{0{1!71ZZb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ecw_';

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
