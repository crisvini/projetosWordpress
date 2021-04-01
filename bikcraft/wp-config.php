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
define( 'DB_NAME', 'wpdb_bikcraft' );

/** MySQL database username */
define( 'DB_USER', 'wpdb_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'e4j4v-F<]OTzDJK8{b#Y{Rw7R#?:%ir+}Q/8DP#-[VPqJY_ ,icO&*5wA1x[8s7H' );
define( 'SECURE_AUTH_KEY',  'o.nU5wwoR9CVD&211_;-ZtU-83h[DU0s%EUYJJAXVKuOJw2g!F|K4(.&PHAHe:SG' );
define( 'LOGGED_IN_KEY',    'OUMN~<J<lM/)b/^J}PTdsq@/,(/*b[:[9BUCi{L*2ZSAU:-|d&vZxjH+0IqD!Zn;' );
define( 'NONCE_KEY',        '$}$5-~RN~+sr2 DuD-;|T2d4UW2-lZ},HuP #HFsFE,V.aJP;NB5-naS~S]H05ld' );
define( 'AUTH_SALT',        ']npL~>A=P;T<3P#Vr#:]~9AA==?+vhc#2k+-K5`c2to|PKEnl5Mp:t|0Y;RL0j|!' );
define( 'SECURE_AUTH_SALT', '2Wd6~zxPQwGQy}@|@g!z8|jN#D5>Ff*1Qk1DD@@E)1,g<1`qgy,tC7A$IE<+4.$ ' );
define( 'LOGGED_IN_SALT',   'Ztd57a2KAvMQ09dzpsr+0]OYYT#>[%=}5F^Fk{f4o{ivxXf:`_PUcEiTB`xj/wnZ' );
define( 'NONCE_SALT',       '##J?8DI9zx*maL.6-j{xGt.o Z(KbZF:ETq%o&BK^xJ,jz?8%|];U44;hTN+X?sA' );

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
