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
define('DB_NAME', 'digit169_fuatino');

/** MySQL database username */
define('DB_USER', 'digit169_test');

/** MySQL database password */
define('DB_PASSWORD', 'Fudbaleri89!!');

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
define('AUTH_KEY',         'cMc[<?YS)%6;T2^x;JuvE=UMKJJn7nRyvRHU$Q&me=:*3^r37A/-E:,a!q5<a@[L');
define('SECURE_AUTH_KEY',  '%x_Kq15hWR~;F4$d|(6x$&kl=%&u/NY#GLU0q%DN+ffv)CyFlU2`vyhGPatdD9Eq');
define('LOGGED_IN_KEY',    'M]dU_,}nJcx4>su/a]2xxeH#Z0HK(ZF+&v`bgGT>mdt]y2Fq(<>Tg89c56O5Ntw8');
define('NONCE_KEY',        't*vdkc$5,1y}*LfXv-kX4dq<nZW57uai;).6Yz[_%m6&@MHNN|7%CY(^7qf[dK(7');
define('AUTH_SALT',        'q&#nl3%BX3@+rc;~XKW}u]BZ(Be+JXK]Y:Cq k@f0.KIpm=BI6bW$Wc%Cd]Df} Y');
define('SECURE_AUTH_SALT', 'EYZ&)^mxy%r6qVf]5b{(YuI4:_fj:+lzw_D(RKU#HzL0/~$aneWf+P4-[wOfqhRI');
define('LOGGED_IN_SALT',   '<2<>_=.xQ*GrZ,5&;DBpod-x3c4B0!Ve9dX}:y+j_~*$21}<lZ]xnNZ{Hy9VP-|y');
define('NONCE_SALT',       '`ZrNg.VjLUJ/>yu04.w~+qc#)]~(J]Y XP_g~d9=P[*VDzXNwF0g8{U(Kvzl~w7v');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fu_';

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
