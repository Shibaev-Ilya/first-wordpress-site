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
define( 'DB_NAME', 'test_wp_sakirka' );

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
define( 'AUTH_KEY',         'KbOGu#]ue DbO,7IQ[K76J0RSo{cHa2xUy{LlQ$e-#>p`?PArsxN9}$g/[q`B&m=' );
define( 'SECURE_AUTH_KEY',  'yE)F#Xq/MF]y1xIY&M~uLS6Vp}=%@8buDgz;+^kl*6B8TpH)}L9X~pzGR`7O8U$0' );
define( 'LOGGED_IN_KEY',    'NuOA5m<}8<yi]9A^h6w;WMRD5_Rm-)k{6Et:8^jwy5r#Zn`6@>o=9xw#zB(|rV$z' );
define( 'NONCE_KEY',        'TAyEr@CSzyV$-gB6!W?r%s.Pk)33~<CSqG# |cRUWj7=Jw5&r9>kYHhU)6:_KY%/' );
define( 'AUTH_SALT',        'g5EryNe=R|CDO11c+[=U(/sR<o?/BtX9~m]DP2_]ifDU8*K.:Ea*H^|)eu!?Uw_Z' );
define( 'SECURE_AUTH_SALT', 'BJ@6UnWiR*Hf<gd%Y;DM(Yc,J&E0m%+{;R,nb3ET0gqM&y.wu>_KVw?vL{mug^Qk' );
define( 'LOGGED_IN_SALT',   'lII0km*oj#bGy^C1+vG8?vzM@^i~XeRhxKh%9?[oSG6_vCDm!|acn2,lC;y!Gkqp' );
define( 'NONCE_SALT',       'zKA;.ttUL<1A@fq?jXLpjl>_{K1CP$0xl(TY,xO?:z,^qn%={MBMy6&fx^T?nXo>' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
