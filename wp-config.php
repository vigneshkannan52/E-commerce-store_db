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
define( 'DB_NAME', 'e-commerce-store_db' );

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
define( 'AUTH_KEY',         'vY5w*fAk$ILvuoa)vnl1J1fWD-Xneo;Y=b~E@) KLb9#g7t0UPZ 9Fy(aQj>Dw@D' );
define( 'SECURE_AUTH_KEY',  'B%>:zS^NT2li`YJ?YnTa~WZUt2.}IS7#FCU%pU!vkISScA$T%Y b+V59<0!o3(vU' );
define( 'LOGGED_IN_KEY',    ')*lmih?l[jn1]^i[@EgnLn9 y 4c3,J<IF:JdqaHdGuW))?FoKDoK.D)aLtT=)=I' );
define( 'NONCE_KEY',        '4k=E-FiA@uex[n!t53)}3V]:^pbGp1UqJKW=NLLK5r[! |G^LjqY^<cVXZ=:|#0G' );
define( 'AUTH_SALT',        ';ryXhKA94Fann%^JgKmMS)VB|WM^xnU);C>YQBZhEJ%(^[Y0=_%1Gj_~.^CgH&*t' );
define( 'SECURE_AUTH_SALT', '!T@fFK4[&S$GWMg6G@.X)us!AZEMqG&ACv.~ $U#i,eVm[,:;U_e-dI2aWDQ=EnA' );
define( 'LOGGED_IN_SALT',   '1qmUMJ|-Cu+y7caJ~A#A{u(pEVg9k.IK9xFmeVe)=mS]h0h1uZ[)<Z]y<d_uu^0(' );
define( 'NONCE_SALT',       'OB}+Ae]3g>w`;/9!(q&^<G)0+$Kea|xIUI?D[Y!C; X8!%Lx*DFH6/fA:p0MI#vA' );

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
