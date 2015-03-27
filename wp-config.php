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
define('DB_NAME', 'sarahjcohen_net');

/** MySQL database username */
define('DB_USER', 'sarahjcohennet');

/** MySQL database password */
define('DB_PASSWORD', 'T#HeaTHL');

/** MySQL hostname */
define('DB_HOST', 'mysql.sarahjcohen.net');

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
define('AUTH_KEY',         'n!Wynk1^:6m#B~3]@6!B#Fu%YDkgKxS8U`#ugCR]2[d=:[S7%k$="l^)V#NU?)ys');
define('SECURE_AUTH_KEY',  'a5hx*`lHc~~=!aUkOH{3vmaCuX=eI:Cu/d^Gh^%a]oS~^F?!adV7ro]J"/$zp]eS');
define('LOGGED_IN_KEY',    '$MHAc!qHRgbC^53F3+Hcy-(Wx=OqB{0dBUUT:WWcfk:=FaLVDkasjt9cs3OI;(-1');
define('NONCE_KEY',        'nF;-dux95d@a1jHwoa;l"@^PsRulhOfEvFr#-|R|4(MIj6U;gMl]:V5W!I:zD1~M');
define('AUTH_SALT',        '!)sUcXsD:h!o7h;434g"mtJ+|#{Lk39X_#pPBw{aI!$=n80:4M!SPqnkNx#l93E:');
define('SECURE_AUTH_SALT', 'MND@nYJlqajKjL{+;M0q]pm27MX~opAwwH_Q??dkfHlY}PQ:"p]a32N@)mA"WzoI');
define('LOGGED_IN_SALT',   'lvIfg"8:bEHZt8DBTZ(+SQg+Js9~}Ou]`TxhCa/[qc#?v~972:hU-+UndlWrV;$h');
define('NONCE_SALT',       'ao3PoN$Pe5E_ARLAQ"tmC*0"&hhoZ_H`p$PI|+PQ?}NqDH7a=8g|z~t_&d3)SU^`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_vnf3dy_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

