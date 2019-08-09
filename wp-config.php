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
define( 'DB_NAME', 'smarty_db' );

/** MySQL database username */
define( 'DB_USER', 'homestead' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

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
define( 'AUTH_KEY',         '$&<hVAV;r^+ps27Q)g>:6r4:cln..z#?HeM4:^hmojZ05e1_E%K-u}Q<UszVTY%!' );
define( 'SECURE_AUTH_KEY',  '.-CLj3|R>uMJGfnD?7^YQm+]LDU%Cf`4 )7/,o%3?S7>f53)[Y<1&:dm[]4 ZU[I' );
define( 'LOGGED_IN_KEY',    '%D7ynRjofV&QrDp8FmL.EPB]o]}Ng4yt<[,&f|1Tz%LMxG56N-GUNyNF7W)V?|3H' );
define( 'NONCE_KEY',        'GgFdN!3zQ-w+A#D>9L(cQ zeU>=R_K/QL~K$P4:Q g{1<?k-/[E+[!TA%P1VRcS`' );
define( 'AUTH_SALT',        'e$O*&rU?X74TP6fNo_sda$o5Uv9L#DE61]lIR|m&q@i{OJ~Dg&Di&+G;LS/JWl4I' );
define( 'SECURE_AUTH_SALT', '?I&1!STycg1<HJAk&?>T[fB=]akzzPW<tq?-Ln.R73ZY2:2fdir<75ujo[R6}Lb&' );
define( 'LOGGED_IN_SALT',   '-YYIj4IP+Wz/1_9&|(w@OPjeCZDwbGyFuM8hU_>NjG_8o1+CEPRJ<KPaY&Y!m=M|' );
define( 'NONCE_SALT',       'q^{dY[hM(lmE]G`K*rw&!RV+m;%}N(L_Rm%Z,F.4urMewNC}{w~U$(N>8HZG[J/d' );

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
