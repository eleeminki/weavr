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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'weavrdb' );

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
define( 'AUTH_KEY',         '+a0/KEWQ(Qn?c!*maP3w(Lnf)07p4V%O En>Zu}SlJ/]%nb!WcNgrO;gYE+nVLi@' );
define( 'SECURE_AUTH_KEY',  '3EJfu,FLS2m_^Tx^~[oX=ii/ET^.6Yp~^@.*3rD(QscS;VxbQy2HC<FIg]P:lW8P' );
define( 'LOGGED_IN_KEY',    'wsN[6@vqT1,gb=}t1~P${Uo6.Ql;@n9%.8R9VkK6DSq~i4gc*7A)5=BX)wkL(*(T' );
define( 'NONCE_KEY',        'A&E;92E.U<z]^Qh<:P-};}3K?KvN]F-N|vU=E10l`14_If]z9nK~_W8QHN!w#,P{' );
define( 'AUTH_SALT',        'f5&0uc= Qf(I)a d.FY%S$oy59@Per.vDm+hj#L)aqSHgp{7Dg^bgu;.ZXSC)p&F' );
define( 'SECURE_AUTH_SALT', 'Ls^6<GK(z(VM4RvUo[T`;2Hl&mm&qOC8B?x6/akva7`zoe&+l|f_kB~,2c)_^ggp' );
define( 'LOGGED_IN_SALT',   '$c/)i6p;0mXsMK{SSVjU,N&.Sg+Bq-iEkdi=m3:QNmX$~WQl#B{9fs8?)cs@#Jv7' );
define( 'NONCE_SALT',       '^sA9!Hrva)q?4](O i^ | UX<N4^4N`B!GCoj]B$Rpr;lU[x+a.#J)|wY>y^75~o' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
