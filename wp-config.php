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

$local_list = array(
    '127.0.0.1',
    '::1',
    'purdy.local',
);

$dev_list = array(
    'purdy.devdoubledigit.com',
);

$qa_list = array(
    'qa-purdy.devdoubledigit.com',
);


$prod_list = array(
    'purdymotor.com',
);

$port = '';
$domain = 'http://'.$_SERVER['SERVER_NAME'].'/';
$server_addr = $_SERVER['SERVER_ADDR'];
$server_name = $_SERVER['SERVER_NAME'];

if($_SERVER['SERVER_PORT'] != 80){
    $port = ':'.$_SERVER['SERVER_PORT'];
    $domain = 'http://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].'/';
}

$config_dd = array(
    'local' => array(
        'link' => $domain,
        'user' => 'root',
        'pass' => 'root',
        'bd' => 'landing-purdy',
        'debug' => true
    ),
    'dev' => array(
        'link' => $domain,
        'user' => 'forge',
        'pass' => 'tbKtaDtVs2wAcPb6ykLm',
        'bd' => 'landing-purdy',
        'debug' => true
    ),
    'qa' => array(
        'link' => $domain,
        'user' => 'forge',
        'pass' => 'tbKtaDtVs2wAcPb6ykLm',
        'bd' => 'database_name',
        'debug' => true
    ),
    'prod' => array(
        'link' => 'http://purdymotor.com/',
        'user' => 'user',
        'pass' => 'pass',
        'bd' => 'db',
        'debug' => false
    )
);


if(in_array($server_name, $local_list)){
    $creds = $config_dd['local'];
}elseif(in_array($server_name, $dev_list)){
    $creds = $config_dd['dev'];
}elseif(in_array($server_name, $qa_list)){
    $creds = $config_dd['qa'];
}else{
    $creds = $config_dd['prod'];
}


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', $creds['bd']);

/** MySQL database username */
define('DB_USER', $creds['user']);

/** MySQL database password */
define('DB_PASSWORD', $creds['pass']);

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define('WP_HOME', $creds['link']);
define('WP_SITEURL', $creds['link']);

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


// define( 'COMPRESS_CSS', true );
// define( 'COMPRESS_SCRIPTS', true );
// define( 'CONCATENATE_SCRIPTS', true );
// define( 'ENFORCE_GZIP', true );
//
// define('RELOCATE',true);
//
// define('FS_METHOD', 'ftpext'); // fuerza el modo de sistema de archivos: "direct", "ssh", "ftpext", o "ftpsockets"
// define('FTP_BASE', '/ruta/de/wordpress/'); // ruta absoluta al directorio raiz donde está instalado WordPress
// define('FTP_CONTENT_DIR', '/ruta/de/wordpress/wp-content/'); // ruta absoluta al directorio "wp-content"
// define('FTP_PLUGIN_DIR ', '/ruta/de/wordpress/wp-content/plugins/'); // ruta absoluta al directorio "wp-plugins"
// define('FTP_PUBKEY', '/home/username/.ssh/id_rsa.pub'); // ruta absoluta a tu clave pública SSH
// define('FTP_PRIVKEY', '/home/username/.ssh/id_rsa'); // ruta absoluta a tu clave privada SSH
// define('FTP_USER', 'usuario'); // tu usuario FTP o SSH
// define('FTP_PASS', 'contraseña'); // contraseña del usuario FTP_USER
// define('FTP_HOST', 'ftp.dominio.tld:21'); // combinación de puerto:servidor a tu servidor SSH/FTP

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
define('WP_DEBUG', $creds['debug']);
define('WP_DEBUG_LOG', $creds['debug'] );
define('WP_DEBUG_LOG_DISPLAY', $creds['debug'] );
define('SAVEQUERIES', $creds['debug'] );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
