<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '(L-2vv+%cuST(x-t$i,B}C,z6-NvWW|@7;EnlQ9^CR/zlR8-[[Zlq[|R*qE!.nHq');
define('SECURE_AUTH_KEY',  'dfG Bo/kh%n-C(&{Ih7:G0;rS XV#4z4|:yXEDiB+RSM-E&*F-)+z![;Tc+!0z5-');
define('LOGGED_IN_KEY',    'B59V02P-IgZZ`lj &k@-DKq-#s}L:lw3I.p@1.bc@ehVbyeF}t,A,D0bWJ)Fh<nj');
define('NONCE_KEY',        '[G!i}G 8`&i<T<u m`|1?j+8zTy}WAa)DDfY|e/^>B[&M|FUtZ->yR248Dw-Yda?');
define('AUTH_SALT',        'xe.Z D|Y+`9;FSVI_ b>y,Mu@r}?5cA 2vtF/[$rhOdg_4wCQ){SA-}(54JC/<C&');
define('SECURE_AUTH_SALT', '}Ub?{p--:j?)yY:X-Psg@xSdB-74|0q|!Ym#O+[BI*i`a]5?(9M+6#0l}cmM$fz>');
define('LOGGED_IN_SALT',   '8/~wsG>{SXm|0E94WQ:-}EA[>#f3i_#!|>Dv HlaCb4g5H3mzpJ96/3Y8F53N@!8');
define('NONCE_SALT',       '3`]!24y[Y`.J#@_ktO7#s^v``|!#/S;QGL+I!4u{eD+H$!ce-iyfZR>pp;Np8Tw,');
// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
//define( 'WP_DEBUG', true );
//define('WP_DEBUG_LOG', true);

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );
