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
define( 'DB_NAME', 'moonmagic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rupesh123@' );

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
define( 'AUTH_KEY',         'f]!aZG+orQ)IMW(,L7cArZwV0.C9KJI_di/dc5i8LJAVg@5MjhPmCn)`WU*T,s-!' );
define( 'SECURE_AUTH_KEY',  'hD{tY{@5!}|/S},yax%`=GN@,Qd^pD0HE<Q,/f=wrkcy1>*G? `/;Gv.3nwt%@L3' );
define( 'LOGGED_IN_KEY',    'Cy6`0VXDc(9,1/E5Iy0CUr.efH3F]4GYB)J7]SI.TmIx!n~DWj,7`J1QH1^,BJ#G' );
define( 'NONCE_KEY',        'L(v^Y+? a<|!v#YG[.:1yfc`@xXeH>l`|.D>Q.!1)gl>T8r;YxEiiJ4u0c*%X?,8' );
define( 'AUTH_SALT',        '2G*U%zeB08ZdkcBONPCX*UcxB%s*Dr5*^iZpav8kc1e~8f8yT}OX6Kt)Iq-rTI1b' );
define( 'SECURE_AUTH_SALT', ']~,h~suERhTVtF:e1)JQweucZ~=THiYoa70<G#E*SH?ZNj>/aY=457$;Sy-GLE#Z' );
define( 'LOGGED_IN_SALT',   '*[=oYz&|)_#T6^Jgev9sX6?wX+{mOQ^[#pdrTw/nxUG_T>&;Y?]Uq7VD_Qmj/W^C' );
define( 'NONCE_SALT',       ')Y@{F[ V^M8~^!Nsp9I>STMXQQpC:Cq{I#uuZpF2Ym 5-?&0#c{<F4JL}b*#Y+ff' );

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
