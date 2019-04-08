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
define('DB_NAME', 'codeline_test_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '||5)$<o2Q@%l(qdS?C2D~67xFP>5O>+[;7^Sk<:l>)ID)%=4&]lA(G(WTYzDb3ht');
define('SECURE_AUTH_KEY',  '<MPRVJ6I;eb18i|17u(6T_wo:E:l+PV+~Fcd8BM:KUo8>H.7g)OMEUi@#l$zbaQ[');
define('LOGGED_IN_KEY',    '~?]{ro7Ep{10jQ+v,>gDf0ce)|@xLxLq&Di)t(OrjJGL[w[}+6@Kh$wG`eO4)EEp');
define('NONCE_KEY',        'N2dFkIk-6H~n%Mi&Ue3~uhzm[PHFy{v[MkM|-6x^j*&lum:xg=]=;I|8{9Cw)VC^');
define('AUTH_SALT',        'x6s_G_[U_,E>8Rm4I+rB7<=|F5<3#:Kg-87R}I#V6f[;2V(o+dNPrT]S>N[F-1Eb');
define('SECURE_AUTH_SALT', 'dbMPgw{0FHm1`]R7|O:Nk.l%fASta4K-8h<^z ph4f0GEGs+Cj04J_|0-m=FZ{zW');
define('LOGGED_IN_SALT',   'MPN-EYKZF]]v5,F04e7c].*_^=1x^hCH3utEO}c<%U!q%z#kRnjF=(yf]ITK*yPg');
define('NONCE_SALT',       'd^s]%;:By:nuw#LGuF.!gw|*Mjv)<arD@k^r}_9_E{Sx$ld1{bM>t`.fz%5c-oQA');

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
