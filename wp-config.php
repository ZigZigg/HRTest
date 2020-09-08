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
define( 'DB_NAME', 'hr_main' );

/** MySQL database username */
define( 'DB_USER', 'zig' );

/** MySQL database password */
define( 'DB_PASSWORD', 'zigzig114' );

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
define( 'AUTH_KEY',         'ae1,|d1#SoH>M^IP^66j#%,iWQ&u_ke)Zp^=rxJhK]7d|0&s1 q_QdEg}aSwv)H|' );
define( 'SECURE_AUTH_KEY',  'F(o+=^%xDQgZK>A*o2gzfB`Z3KtO9XmD6H`*4cR%ezOtI>jbemRt5;JbZ!i3u+=8' );
define( 'LOGGED_IN_KEY',    'qW:2/1jDD5`PKix vX@_EE#2BSFgYgE(V(NU5-O[a}<;}ra0mrjWYD.vfwr&Ty*P' );
define( 'NONCE_KEY',        'w-f5Xs8Zq9!@aTh$mp0tjaY8;fIPlMs~Fd5(xsEW w*t_-JMBuwM;[B|Gp7 :U{|' );
define( 'AUTH_SALT',        ')fnqua a@GwyErjo7[gsaP**|T4_4JjJr1b[,[z#z<f%p}Ak;{T;^g`1qXXcmy~.' );
define( 'SECURE_AUTH_SALT', 'kAPZ4d)f.N!.hQlxe~? hnD{L^Ei#-w/DNY<B&Kicy/iGv6CUFw-$3Ui[ZCcP%a8' );
define( 'LOGGED_IN_SALT',   'E<SCp]1VPVpSn9vfU:V*aRQgu<Lpo7IfwsXR/`wcZBz*V ?)}y&W;RP>IcfQ?d;L' );
define( 'NONCE_SALT',       'n(f[ZJ{cp }#p^1.%V,8&<etlp`?iG_Z6It|m*b@,91?Z_u.V#!JW7F](;5Xk+pg' );

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
