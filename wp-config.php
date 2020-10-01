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
define( 'DB_NAME', 'tarsalc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'N+>5*Dy-,fyzOh>>{qIfei=N}[OvL>NrWw#A!)0H_O5b6]Mui>(O2tE$|(N_tU9]' );
define( 'SECURE_AUTH_KEY',  '8je,PdiW#X5X?,-T6QhuR{P A44&7{%P-{~=X?OA{v|k+A(aP*1t-&=4B4C*>5F]' );
define( 'LOGGED_IN_KEY',    '<<Yprlt>sWr RD_nM^2{/0l03nL?shmD^Nz%%FZvbvPyxoz2s-Oc8FMznE~1A_Tw' );
define( 'NONCE_KEY',        '4Ut$V;x8 1Qv<SvYW-jXV6+f,]KReb<2Xg3g]bCtdc(/%zecyB$bAuqve*G%RJ]b' );
define( 'AUTH_SALT',        '4 {?Rgv<+}[SH$3n96J.b,.kj1cw$AVc)%>E6WX@0/&M:SkOKKt6(Z8t8}pU/Fb&' );
define( 'SECURE_AUTH_SALT', 'Isrk@swY{+DDQ,zHmjp?t3H.,9_Z^#36/zM&ZqaTJ2Eb?BmxcBV9d$[$aSf4BvW{' );
define( 'LOGGED_IN_SALT',   'r{WvdhoCxsMtToc;k<d:`-RH=(o7f8~_n/rEO{-{i~+G;>?iNhvPCz5Sp2qBz}L_' );
define( 'NONCE_SALT',       'Wz?Ibsng*.h)kP3IBUK&YbiyZj.G$=<qpozh+AuDD*iPRr-|^F%r4nKplE007&*2' );

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
