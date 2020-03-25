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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'C];qo*0}^-|0^xFEqS,@APLF&9%LCYWb(P)?qbfL,~M--,{To}Pq0ZJDDCJh3WG?' );
define( 'SECURE_AUTH_KEY',  'mQH?X0J>7&.?7)9eh.eY0PxP&JEa?Vi;J  i+rcnOGX.^D14v&8?XFTQo@6mZBi*' );
define( 'LOGGED_IN_KEY',    'zT.w/u#*>g^=<8.N${+Jip]dxT5%]n#|4G%c8^F:@9o?JZoCYb7evVfwM)rB*JWV' );
define( 'NONCE_KEY',        'fbq$P@m+fqAeB ta~)E5%B]NM$:.0UO<s7so^;3EPvW%t4soY6[w_afWZb?w}^fz' );
define( 'AUTH_SALT',        '%BAx1[q^jVuuZOa3e,[.2yj:VBxT#V(.fp<.Y8u94is}6][Sb~vl3~1h63Q8J9+(' );
define( 'SECURE_AUTH_SALT', '/xSxvh4?[Hd{k#`0P|T&,!+xBSa2@,sI7)66.=HoXQk.8~O:UN<DB:W.;8AP^]<f' );
define( 'LOGGED_IN_SALT',   'v73ug&g33}8nO{`%[6^0ThR%eQpF<KXk)Ag<#jro41Ju,7/DySb}ExQHZ]OJ7C62' );
define( 'NONCE_SALT',       'gleH0>kpxNu;tsF>$.t%8/5[7>0?vq.Qm4csf@?+QDu@Q=-=gPN21pidFu;^fw8U' );

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
