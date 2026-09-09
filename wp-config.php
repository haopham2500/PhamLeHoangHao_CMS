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
define( 'DB_NAME', 'wordpress_phamlehoanghao' );

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
define( 'AUTH_KEY',         'Tp[:rE!pLm|<[TV6<5<79f~ZsxO#|s]XBrG)V}xRJgP`0ysEFG~C~seFcyj3?u{,' );
define( 'SECURE_AUTH_KEY',  'tK7g!.Wd9bu|8~6(,P+?}XM7XBiJH6=j})6=K`nQtZ}+}.tFVkE=2V[0@P33n4LS' );
define( 'LOGGED_IN_KEY',    'nr}U?a(mcL.`.t@pJ~e0>hkdx|5GX11qVs%,ao2.[3db_nicW56Gdq_lSTV:GkG4' );
define( 'NONCE_KEY',        'Bzw8l]r&6X?6ggEI06d.gLe 9@Ym1G f3hQq2^zs#t)@}7AOB2 F%X A%7IaUaxV' );
define( 'AUTH_SALT',        '@CBHg.pVEkeT3OAEP|e|S`H0C|7i`N,ss.#!L7-|{ 3S?4&@<t1lind%d!2,BG60' );
define( 'SECURE_AUTH_SALT', '[5YVYCKtt{=|~WV!b6!(LE&8hI,DVS=X*iF}]^@Ch$:Fjbojl}V!sp%&)EX2Vo 1' );
define( 'LOGGED_IN_SALT',   '`}z@]BO~Ui(S:;qJ.P*8stybkVG%S/H?sc{MtKf7)WO$IPlgvth*qrE>xFAP3dMl' );
define( 'NONCE_SALT',       'mbTf>GY7Uc zeI6Y..T,`sU&WB(A)>J5`Xmc>q#T,}%#(X(*J>zF;ocPr(!QZHn/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
