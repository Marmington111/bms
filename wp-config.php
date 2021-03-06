<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'bms');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'Q>)x.S[)~<2>uBq((<uLj<mrRHj(^}u7Klh3.t11Q4m{._Z{?ik7bL-At<R1D-e`');
define('SECURE_AUTH_KEY',  's_b1|:i2ui9Z?Bbues[Fr1KeuAd:}RK s]$<0~;u$w0y{QH&]0Tw~i^q;~o:RSvD');
define('LOGGED_IN_KEY',    '6m4-]BwQZ4o5?PBS>$+Ih&QJAGu`Tj6-IQ&z{&O@QnIOP-aDHT>AvUJcn4VSgLg<');
define('NONCE_KEY',        '6(dkpjUvb$:^aZM3xC+0j -sAFU.X>w{?#iEiO#wB*BX2kSJ)B_#txR^]yh5:rm?');
define('AUTH_SALT',        ').pI62!GjATTS0pb@I5n]%%9~I$YQF(Zz3R$b04([B)+3`I%/sgPD|gWC!-/0vfZ');
define('SECURE_AUTH_SALT', 'y%C/H$ &./fe FNoX+rPd8+ixxdD |5wx}>H2$R(|YAfg-_PC={TGq>3y+tE#<Zu');
define('LOGGED_IN_SALT',   '@zj&jYClB#DTFUQXu_<Nw&T$| YqBfRtM9)-*(ToS%KqJ.qGR2t{kwy[I-}Jj6gm');
define('NONCE_SALT',       '-9mC|5ar||e/yin*^U?zhjQ<iU(W`vbYQKb3_o|f+tMxBR,Q|3] |{yx3IoT(ie,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bms_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
