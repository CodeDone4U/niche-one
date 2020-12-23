<?php

define('FS_METHOD', 'direct');
define('FORCE_SSL_ADMIN', true);

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
define( 'DB_NAME', 'dbs1153538' );

/** MySQL database username */
define( 'DB_USER', 'dbu543731' );

/** MySQL database password */
define( 'DB_PASSWORD', 'jloAsZTecNjKUrBfXoxR' );

/** MySQL hostname */
define( 'DB_HOST', 'db5001360576.hosting-data.io' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'R5@o_l9ZXmW~}%:0yhU_t%Agu)qG.WL)*)o8P:4+j4uHfO,|tE)%HBYU-sS6xAe;' );
define( 'SECURE_AUTH_KEY',   'O}|;oIt+*ss%4 )q[P6>/cuosD?%4pSJ7_6pFefmh=|q6IZX4,UAh%6@G:9x/>[<' );
define( 'LOGGED_IN_KEY',     '(dK>9XnH9;mztA=?)yWi+4UsYIwsm6k-okq*(Yc|uS(2)#b{pB[Uh?ksNNBA?A!Y' );
define( 'NONCE_KEY',         'Vrxag@E~^;e^d;Iug/{wK~Dj{W,+ROt{QNSgSR-<44QtbeL*.d0eCM7Hd$L@92f+' );
define( 'AUTH_SALT',         'YsLX8}RyX?n6whxp3?O>jLF;_*2=oPf0#BlqlGaSy`dM.o?]ja,L{=UpQOc)>N]b' );
define( 'SECURE_AUTH_SALT',  'O]I.k]lCb+vKu$~5np>2&@([[FNPn__yaB iM7pd;z^ d{>6+4}yPvraJr8<QeS.' );
define( 'LOGGED_IN_SALT',    'D_-UF)M?EF&gc[9lMX>n%[?2?Nu9LRT|wsh}?;O;Y3}*~,zZx.MPWj4>N5%A@-Bb' );
define( 'NONCE_SALT',        'WFBbEpu/f`GfYJNMV8X/J{S9J-BmyZ5N3_kF#H9uN+>f|2.G/6J`].j&.q_:iDX_' );
define( 'WP_CACHE_KEY_SALT', 'U^QQI682`$umL^HL?+Akd%^ca/1lJO Ww,z{#5w#IF>,Tm0GC!r{PJCIb:A_`(J3' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ctAfNpZD';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
