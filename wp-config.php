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
define( 'DB_NAME', 'jv_solutions_db' );

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
define( 'AUTH_KEY',         ')9iSuc}p46TL4P E^,d?B[>G7,/_m@lcX+x(Ay3p4/c$KeJC0as&ZDX4%!(5wr/@' );
define( 'SECURE_AUTH_KEY',  'X^_:9jF$WenR={3.^r8asS3uVP%qo9k=y`y$b4{*hx&9(dE8a,-k48DA_d7|R|k ' );
define( 'LOGGED_IN_KEY',    '/.(uj&OTv=!jZ0pf}vt~|(htJ+tPpQ9vtKz|7Nzg&,BI~Rz}[{yZ73Bo,<bQ?,zi' );
define( 'NONCE_KEY',        'MZKf(ajh.:};_Z1O!olTu9R1I)~VL!-C9HUeqacg]2/hm>e7T_!CUF{H2).el?@g' );
define( 'AUTH_SALT',        'T`dt[ c6Jn+4T!r#^P0R4,o>F(_S7o&~:-%obC;,E<ArXoKRNp}:TL^.dC[7y?Ji' );
define( 'SECURE_AUTH_SALT', 'CPt]?y]#H0(&WZE&|`q#DmyLG}4[E)#n7A1O&bA5w.:gH|/#$hU^y]$:elh7;QXE' );
define( 'LOGGED_IN_SALT',   'MVR%Rw>bw/#_oIbe>KwR|;mQ^#$2zs,;JlNgddjoYHO>70?f~2<+)P3]BR44XRV3' );
define( 'NONCE_SALT',       '67%4_S_GX{[`LPai*r 3DEwq} W;upyFN`W,bV!=Y1|BA$<4q4>Or?XvI5_Zg* g' );

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
