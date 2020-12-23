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
define( 'DB_NAME', 'dbs1159306' );

/** MySQL database username */
define( 'DB_USER', 'dbu1347413' );

/** MySQL database password */
define( 'DB_PASSWORD', 'NVLjIrpeBmZnslsGxhyx' );

/** MySQL hostname */
define( 'DB_HOST', 'db5001367821.hosting-data.io' );

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
define( 'AUTH_KEY',          'Z19R5RP#,MOzYC]S9gd{h<x:dvm&<eB~J&l@$^{<*|l[V8I[G6Px~9p8#c84E}RF' );
define( 'SECURE_AUTH_KEY',   'cgyE/:K$TA 3;TkeW;g!i%{5_oY3ThE6v{Y]At_sQJ <10B ~A|:]5[^>];@jg30' );
define( 'LOGGED_IN_KEY',     '`TLC8-b@yqB;g3h;lZ@Z+PF!g0hZaa-oYEbLC:%=efq$AQR>13,:I3aT*U30sb4$' );
define( 'NONCE_KEY',         'V)3LHf|f+M`TBA!u7zd4[wwj;|f5.#NqY-CX=wX-HDNf9=$<O>kax-Aa5&~[W3.}' );
define( 'AUTH_SALT',         '%@%gRRkO;CsU9w{HSp|j!u;`n8=).u?I)/gE&*;Acuu$OaUR_l~Et~9]xM7{{:T@' );
define( 'SECURE_AUTH_SALT',  'A-7C/3N!hXDb[aV$W KkThr)r$ha@rCw!io@hnBI/*.K/ AhD643<!h+?jF{HkW1' );
define( 'LOGGED_IN_SALT',    '.HlfTy._{r*p|jn5W&WgXV@V&JV+g~MD07?S=s-dK&0+~|=AYaHb|)zkMh,1 t#@' );
define( 'NONCE_SALT',        '!9AwSnA=YSa6}%BXlSf@Im5!e$#@8NqcSKpS$yg=:yS-x+OAlzdiz;bF[j7CF@u=' );
define( 'WP_CACHE_KEY_SALT', 'Rw{X=ij7LRIp{ac?</MMMtnD]+1Vuy!GlQT(w`Uu~hIS=GGk*,34TzI>CVSx?|Q?' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'QuwZwiMi';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
