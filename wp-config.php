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
define( 'DB_NAME', 'sigma1' );

/** MySQL database username */
define( 'DB_USER', 'u_sigma10' );

/** MySQL database password */
define( 'DB_PASSWORD', 'sigmo4ka1!' );

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
define( 'AUTH_KEY',         '#^JO7yIM9[PAPMpND&awcz6FZXzeX9 7#EgL!2O`4;1>;l6mYIeU<>P!x@%kks3m' );
define( 'SECURE_AUTH_KEY',  'Du-J[L<MP(m/}s4oRVoyR<~#VMS[STXC/m{10M)YvNDtd,1F#2[q)JRd?p!bZ5N3' );
define( 'LOGGED_IN_KEY',    'zN!EK?/@=*XUl1~KV6ei7j[jp-7+sl}~[M@Y/U0Bw p]%3YCg0/3^*HZ/j{wWPl~' );
define( 'NONCE_KEY',        '7{kj@Hx9~Uac8i[vx4|W:O&WLb^cm%4>oK`?0@aZV_1sF|ej -FV@;juH`k?cY]<' );
define( 'AUTH_SALT',        'ny-3 I1COw-y<EPz^KqUX]r.BF$94MU?&>=q>vp;(v4?a=7kz2shYZqgS8n_$3Xt' );
define( 'SECURE_AUTH_SALT', '}Av4QE0&w[&EYhre%*@<rJ(X.dxE-oTvg@o@]/NnRZ6j&J=T>~ZgUn}uzFb?uZOQ' );
define( 'LOGGED_IN_SALT',   'c|?#;9#J&F$CJ?{46SD>eb~sv_UWEjMb$Uc gvBD$PYp8F%Acc)%0(R~-.eg!.Cm' );
define( 'NONCE_SALT',       'C?!%y@_FHffpRKVfU.`dYi-eGJg/MvsI b)GC$);#xwN-4N-bcra]u<PnMptvx#J' );

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
