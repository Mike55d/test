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
 * @link https://ayudawp.com/wp-config-php
 * @link https://ayudawp.com/cambia-de-dominio-ayudado-por-wp-config-php
 * @link https://neliosoftware.com/es/blog/configuracion-avanzada-wp-config-php-wordpress
 *
 * @package WordPress
 */
//Aumentar el límite de memoria
define('WP_MEMORY_LIMIT', '10M');

//Aumentar el límite de memoria en la administración
define( 'WP_MAX_MEMORY_LIMIT', '10M' );


$SITE_URL = 'https://dev.grupopurdy.org';

if ($_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https')
    $_SERVER['HTTPS'] = 'on';

if (isset($_SERVER['HTTP_X_FORWARDED_HOST']))
    $_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_grupopurdy_landing');

/** MySQL database username */
define('DB_USER', 'usr_grupopurdy_landing');

/** MySQL database password */
define('DB_PASSWORD', 'ERczYB8m!u8auGt5EbwhzBEzIv@xCzHH');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_HOME', $SITE_URL);
define('WP_SITEURL', $SITE_URL);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'l$NoH~Jz5^0BMR6*AzC9L)X=WJ{wl|3K-BHrRukWQus||Kq4[0a,C@>;.-[1<Ga~');
define('SECURE_AUTH_KEY',  'dw8G?*MI0yZ,U$}ojox^BS.5D~^go~p;b+UVU`~jDncjq4`EHS6@Ht6kgEmb?U_4');
define('LOGGED_IN_KEY',    '_6IYsr_M^kw4x,nuJ%Ri{-V]?Y([>LrHJ #aQY0IC}.m=pa)OIFS2_55lI#1A2s!');
define('NONCE_KEY',        'lz]QOLC7Hsg&ejf3hnJuZt:H@0&~,X:Sxw#I6Z1;;NIgAf[B4]T54`S.VgkvtLOC');
define('AUTH_SALT',        '`_U=LTm]zpVbyfY2ub/#{CgxR?d**q}YY,;rH)hHG|C?Ylz@y./6)&zZ=/B`5z*Q');
define('SECURE_AUTH_SALT', '_zidPK0Ps/tKwUh58v-ru&#Qz~:5iVqq{Qd6m@6asJ`.0SD5#.jt<A1Ov6h<7^S?');
define('LOGGED_IN_SALT',   '[@(x6dxj]FYGU; PuDeNYe}bHkDjIn og~hb&=R5IQKVtM75F$(z?T6q|I?Fo{s{');
define('NONCE_SALT',       'Z!gmecG:rlj3y-ei 9{G*X9F`$NL_I9%JdaIuXE.a:q .l&h[qT$$]C*LEG6p;sx');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_LOG_DISPLAY', true);
define('SAVEQUERIES', false);

define( 'WPMS_ON', true );
define( 'WPMS_SMTP_PASS', 'Toyota20174' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
