<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'maverick' );

/** Database username */
define( 'DB_USER', 'maverick' );

/** Database password */
define( 'DB_PASSWORD', 'Jarmiros12345' );

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
define( 'AUTH_KEY',         'VP[oL~Hr:*2z9nD=86h NImcR[[C~4 ^{edi_VWdI+#6oSO[gFd1tlz22J3g|;Z<' );
define( 'SECURE_AUTH_KEY',  '?OuB-8t%NeMT##TQ|v0N>][Upkau@1iLP+[Qb(5OV.M=:hWw>kPjjZ3%NL-DOj3F' );
define( 'LOGGED_IN_KEY',    'qS6z#LpC$OUrzfUMVuSHt4S!Jz$V.MeeBE~)1%lx](yZ/m/WGIu>;OcKv7pT-F2e' );
define( 'NONCE_KEY',        '(~P]is}UZ6G<WuFF!z>w<qI5V|e;m<x]j96WWu.JJC~U67OrOHd &$}P~n&TA*y$' );
define( 'AUTH_SALT',        'Hk7J;uN}$o&,bBnJ#}}T8CP6McMu1,|a<N6,MERDF;0DS{0_!3!p:NS$|._Nv(lw' );
define( 'SECURE_AUTH_SALT', '&LntbWLa1}RX/PW6Rf18P:kE}PEb?1DYPS1If+>AING:@nSn^_$NbtS{?4BJG?Fb' );
define( 'LOGGED_IN_SALT',   'a&6P5X1I]Uz//Rg{iSM`EN&R]w^%[VqA8R(E{L_GqQ1BHXe[-qJ_)/>h6v/wCWEj' );
define( 'NONCE_SALT',       '|76 ^X)xka!{-8XdQ90G#H?XG];]zj].jv[2VCJ* ;_ZUa+W9~`z}16Cd5S*fQ0h' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
