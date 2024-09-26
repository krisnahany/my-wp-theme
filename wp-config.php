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
define( 'DB_NAME', 'my_custom_wp_theme' );

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
define( 'AUTH_KEY',         'ER&ew3+WxXm{HIOxt:uQ.NR@D}7I.0 4x~WTJ9k*D Jl??kPUj+)3oLDZS`NUN w' );
define( 'SECURE_AUTH_KEY',  'o+}Lm_qk6>:~G&&q^xt27,=qPpp*w-l1]|mPXGK5x6$B![{n;0 %gk oi8xm)QV6' );
define( 'LOGGED_IN_KEY',    'rV+@zJhITyQM0lx-s+q;D>)>dg2]0#|h+3b{t@TDOU0)M4g?w+8_Uf(!RN&|D#ia' );
define( 'NONCE_KEY',        'DNR34X7kW4:m^RL>8/9p*h0E[1g`$JAdnBc-*4>s:*LIP$s3+irna;eYm01v0Ic@' );
define( 'AUTH_SALT',        'Lkta~Fl[UBkv]bw?SY8Umaec+[&T6Q_[d)[FQ!N-sPi;&D7!OxSd%3WWOjtQ,pJi' );
define( 'SECURE_AUTH_SALT', '7F&Pd{jGd#C!^H+Z`;LWxi+&eg`#TQ%}x]IwM.PfIo~7{um>HK!Z#AL8#Yyg6:-E' );
define( 'LOGGED_IN_SALT',   '_*_jD)-gz3{K}^O@=wfv$bniu&LC}sT8l3,c(I[>iaf~g7,L1qXLS,L.O$Mlx@Yp' );
define( 'NONCE_SALT',       'hhw+KftoF8?$V6]s^^.P`+3/@bU&]W^tNa3.o<?GQg;lbGBu:Wse_VOo0q]KGjI%' );

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
