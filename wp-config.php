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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '<j3)IKAJB*osG$5*W|(<PZw?BQjr#]T@oN$%n45?zN89BS(dK4QlP[Ni}M&YD|qV' );
define( 'SECURE_AUTH_KEY',  'z0d]*3!j*|jaZl~Mh>Z^4Iq2!D=`<>7U)ooGrp[#UV=^fiQE@}:OePK*0Zr>+GxB' );
define( 'LOGGED_IN_KEY',    '^(4:?P6]s$lRq4yxLV^zC 2*buE9UD<)=y<#I$Bo2(tM8N38Lz7SFY>=F,,&7Y|_' );
define( 'NONCE_KEY',        'p+p;C!J*ApasQf;isNxU^/[#,?*Fcf@O)4kt-bG7v8J7V2fyEyI>/ij6a2X9{xJu' );
define( 'AUTH_SALT',        '!9QIhi60>Cq0DNcsuqo4n5(?TSxhMgPO+OR (zOGc&b->Oe~B*ls?i)FdNuopa3u' );
define( 'SECURE_AUTH_SALT', '2jenh&J9Xd5)kdj]DG<xCwuF_iJ;^C06T_w;Y~(a{}$1&[ulD 9@?5:L7%<]8c_Y' );
define( 'LOGGED_IN_SALT',   '>(,btq].I;D`Dvvbg~=hc8M{pe-cB;8l{_dD9 !rlRt 9 eP(j37OgcIi}pVMv|*' );
define( 'NONCE_SALT',       'JvOsh._;GDmH?US7amS5lHv(eQ4 dOYTvFrE,iKNxO#Hc~6E6#vV%h,CqA=f=cWn' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
