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
define('DB_NAME', '22upontwo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}]gFFMJ] 80,b2.wVDF$_]k-Exs%_1$Ab<ZbaA4%xnAX~)tJ{37=cMSO=vAG@;0t');
define('SECURE_AUTH_KEY',  'rFP/[Vw{Wgu}t&K`f[%!z!p ~NoClim|G5LYt@QCh{hUA8-9pK%&7RiuzP?JZc1<');
define('LOGGED_IN_KEY',    '%Cq!<$ZC8C}jF1|Jo&|Nc+KuHRG2_+RlWA3!DbJa}69V?SQ:/az=8M7)YzH:}a|B');
define('NONCE_KEY',        'UFL=E4o}XT(;p~4RDODPzYCZu]*tR$I&jmm%Ce#Uj{_,BR_x%v.:H.:0Iu(A}s O');
define('AUTH_SALT',        'l^q`_%QGa2([whsYz60LPpq|9hUJ<lh~vQ8~[ZNBeSFew0tMKN|{1U4yM(fzD+!@');
define('SECURE_AUTH_SALT', '=+7G7G~L#Sg{D>;D?HQXc4[{O)@/!@C]lB8N3$@$x`j-TS~v@*!Ik,Gv&/e+>z6!');
define('LOGGED_IN_SALT',   'xrtJU@BUH{9/iO6}EzNUJXo]rb?cx;upbEhn]tc7PfTK~,sqO}Y*AJ}o(|JRIutp');
define('NONCE_SALT',       '5w<ZT&54o;=h|Yr?F?YCm>$[$2h1N[O)T.5!1J@Hf46KZt}$;YhV!(IeDm.SG7Wk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_gallery_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
