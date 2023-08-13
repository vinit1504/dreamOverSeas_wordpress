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
define( 'DB_NAME', 'aadhyaur_dre_ove' );

/** Database username */
define( 'DB_USER', 'aadhyaur_dre_ove' );

/** Database password */
define( 'DB_PASSWORD', 'Rp[45S18-x' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '9hc0xyzvzztlu2tm2nhucts3mvbanks1jsn1t3ofpvyky1gafrigoezzkr28g56e' );
define( 'SECURE_AUTH_KEY',  'zgkabsfpsxkertcnfuxjqvmffeip5r8jc3jvawyimhcobdsy6zks6xjxp3qwjgnf' );
define( 'LOGGED_IN_KEY',    'tgui6lo4huk73iop4zketfejyzvhjjh6zxmgmaizn3bbqlpw0gnitdxamu9y8dqh' );
define( 'NONCE_KEY',        'px7l5w0fr8weclxw4zl52tydxxfbnzswrhdewpttezkm8xzab5kspe1xhn2ulkyd' );
define( 'AUTH_SALT',        'cg5cbwcua1xfngjizz8ne4ukgksufpwrql5we7a6ks6uaqxmpw2grnfmawotcvok' );
define( 'SECURE_AUTH_SALT', 'kaczzjizjia5p2qktvfvr0jtzuuu7ighfpzahtukh92uygrzhm4xcpuaf1rrudjw' );
define( 'LOGGED_IN_SALT',   'pnzv9qkbfvqf4yxd0vxnlpuhidpobjqwgurjtevg03vcrurvbfu3pzeq9ixjax3g' );
define( 'NONCE_SALT',       'yjkym5mvmmbsikyluo0vwn3zerns9k7n1jj74jzgqfeme1vmoy3gpy00p3hpyk4w' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp90_';

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
