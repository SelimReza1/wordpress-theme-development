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
define( 'DB_NAME', 'wordpress_news' );

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
define( 'AUTH_KEY',         'w~eQz[*7H$uOAjAi/EA2bRvU9c4]DG0W~|i)%^e_L(r}!tb|J}>LQIbNDo+h.%zW' );
define( 'SECURE_AUTH_KEY',  'qKj4n`sI5YEJvwG+Joi>19>e*cM{WAR6zR6%6epM5@~!GYrWLkklC6cA$]#Y=fo>' );
define( 'LOGGED_IN_KEY',    '_k,H+wppc|_Q+:G=K|Q0FPh+(K@y[8HZT!Yt^nc!2AOzBy!UM,&`@z m{An515GU' );
define( 'NONCE_KEY',        'GD0w!sz/nT!GgqMrL`I~l2JwL[Z[?KC2@tSW[%IXC;Q+-PFDGU)I Xq{[YP$`Rxv' );
define( 'AUTH_SALT',        ' DLX+O E.her#(|jVA>2}Hi9rFGEbg#YXO>+7xYwK}T h@,buhC^#vkBbCGZxYN$' );
define( 'SECURE_AUTH_SALT', 'FCFGBka57dw`:nx8}diO!9 m.k_kY-[;~,Xfb ViIo&F$w&V}@%MzD?ncb1W;|G9' );
define( 'LOGGED_IN_SALT',   '`6JA:i,g=pf{7E:[#4Zp49v.]:ypVTCBcIN=-:bAj(Tp4aWs+`|ti i;b^-1e_|S' );
define( 'NONCE_SALT',       'kj=DQ{v}vE:?;[0;xWGukXptXY%(xLSf=$Kd0Xi0muh``IOQxAE$DiZ0LVq5@t<K' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wc_';

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
