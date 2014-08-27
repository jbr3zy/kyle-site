<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_db');

/** MySQL database username */
define('DB_USER', 'kyle-wordpress');

/** MySQL database password */
define('DB_PASSWORD', '20fjslru48');

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
define('AUTH_KEY',         '@#!{YFw^;iHV$T+zQdsnwi(zuV5x81>X$rdcP@#-k`I_E9.#W+fM$wT WlS)jqB0');
define('SECURE_AUTH_KEY',  'rW?hi.o7S#-=74kG4f]gnTyk[%RK-DSLcU|FH|XF_yyxiKsKqYx=y^<?aT`b_VG|');
define('LOGGED_IN_KEY',    '|3G4Yw,&Cy]Rry] aM>=VhD?xupq?k6xVE!koYIYsMSN1+.1W1.P @*K-%].y[E;');
define('NONCE_KEY',        'n`i JxP1!++r*nqB:|8VnyQwZh.-7o|Z~E*mpP< 6vKR>+W3;pw_i+=69Rq>*#|_');
define('AUTH_SALT',        '(nvu2z|04U3rw6Jcgn]l-*$o~qaIKO/r<k|Z2h=<_yL5{?ur#TaPXHKOg0Rw@~n`');
define('SECURE_AUTH_SALT', 'UsV6oJ54rGt)`2]SPfEorFAya+^|HdX}5E5a=.+]DpYI/~kmw+fBz1`c,;f0tM%<');
define('LOGGED_IN_SALT',   '~Vq=JIssbS~8U>k.Lg^[/g5O}7,Fju&%7BH+ss;lA{_|5Btg=If<vgNl+`LdP{XS');
define('NONCE_SALT',       'BW;bj-6-GzK>;I|Fu>G&D(,sGO|FiYS-Kdqc~C8+KPv0MDgqxp,6#>d+T]FQ3vsR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
