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
define( 'DB_NAME', 'johndorf' );

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
define( 'AUTH_KEY',         'Tmfa<WAJugK`Du!x_`_[+k._zE5ZwIn)n?llfRXpWzMWw5O<4PXT[Jto:6h1B [+' );
define( 'SECURE_AUTH_KEY',  'bd!#GCAne.E8f8lzYm_@Y9|L~ZB#E`uNxG# @qEF6koE(G.V0@[)jy|=S_, 9yYr' );
define( 'LOGGED_IN_KEY',    'Xt,VI>dB3-2Iq9FL0!fB{4@;FdI)k:]hSSP>bdrO<Djl0/dQc+.3JZ|(Q<R|#V?o' );
define( 'NONCE_KEY',        'iYX;[wGmbKO6p2I$vv)^@7SSg|4ZQe(8s0ti>|[/6a(bo0uI:OgO>D+F*gppIrnt' );
define( 'AUTH_SALT',        't^{(_4m>1Fo8CLW=Y$`Kf`DS1#=Xre!a&8/TWK#k?t`s.<9bLa_>C:IyFu%b{^bQ' );
define( 'SECURE_AUTH_SALT', 'AI@)Mk;.Te+`Di}&=o=3ykZ=<1;uQwvy9M&Lpe!?8t7+//_h(Kz&;j*U{bx6Vx0>' );
define( 'LOGGED_IN_SALT',   '/DVa*cIY]GN_n%JCV_ ~TNgad@?Hp@Hx4Y`wW4g+AVd[P%E}%PvMs@B@@gribQvx' );
define( 'NONCE_SALT',       '*J6i~%q6Fl>uLrxg-#vZjb$jRmph~/-P8G<ZPo%G1v0#PE0E:DKlw16$qv~GJ~vH' );

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
