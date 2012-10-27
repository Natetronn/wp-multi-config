<?php

/** CUSTOM MULTI ENVIRONMENT WP-CONFIG HERE FOLKS!!! */

/** Set protocol, base url, base path and config folder path variables */

$http_host 		= $_SERVER['HTTP_HOST'];
$protocol 		= (isset( $_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$base_url 		= $protocol . $http_host;
$base_path 		= $_SERVER['DOCUMENT_ROOT'];
$config_path 	= dirname(__FILE__) . '/../config/';


/** Require current environment file */

if ( ! defined('ENV'))
{
	require $config_path . 'config.env.php';
}

/** Require current environment database config file */

require $config_path . 'config.' . ENV . '.php';

/** Define current environment home and site URLs */

define('WP_HOME', $base_url);
define('WP_SITEURL', $base_url);

/** You can change default wp-content folder location */

define('WP_CONTENT_DIR', $base_path . '/wp-content');
define('WP_CONTENT_URL', $base_url . '/wp-content');

/** You can change defualt plugins folder location */

define('WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins');
define('WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins');

/** Limit the number of saved revisions */

//define('WP_POST_REVISIONS', 3); // any integer (or false to disable), but don't go crazy

/** Auto Save Interval */

//define('AUTOSAVE_INTERVAL', 160); // in seconds, don't go nuts

/** When should trash be emptied? */

//define('EMPTY_TRASH_DAYS', 7); // empty weekly (use 0 to disable trash)

/**
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*/

if ( ! defined('AUTH_KEY'))
	define('AUTH_KEY',			'$HPf5c|$RlEO9ZeTzA:m!y/yO1^Tt>;J:vTb@)[ZyHiy%]_;qX7lH&jC0|7r-(!V');
if ( ! defined('SECURE_AUTH_KEY'))
	define('SECURE_AUTH_KEY',  	')v1FV<KvtI(`alrr=eog3K#gFD*q?$QT 9{>c[&|.7J!`0,-o#B @ULUcYO0GtB-');
if ( ! defined('LOGGED_IN_KEY'))
	define('LOGGED_IN_KEY',    	'Tj](^8+Mgkx7Rg:v-S#) Dh4F-tAu5%fNvzd-H&Q5CJfs&G82+I8;:FK8-1D*P4~');
if ( ! defined('NONCE_KEY'))
	define('NONCE_KEY',        	'>GU;!`d3vnI<V}D>xp{`5Apk|eV3r6Kc;P+0,[^>uU./z{u;#S4Sh1v#B~X:)8Q5');
if ( ! defined('AUTH_SALT'))
	define('AUTH_SALT',        	'v[[&!T9~?@Q,}-^1GD9Sb%[-}]X;JW)/GS$`uB;^{6FPHDayp>5LO|T*1(ru,OtS');
if ( ! defined('SECURE_AUTH_SALT'))
	define('SECURE_AUTH_SALT', 	'U1kti~ri =9+#Q6D%YSrG.)1_cc`qo7Sx2)3k<D4(ZQ,/V60.n=]k-#B:kf{%II|');
if ( ! defined('LOGGED_IN_SALT'))
	define('LOGGED_IN_SALT',   	'-WuNh0:W6J?YZc..iU^E(V$N+;ap|[O]{AkMM|xy,Hed.<pIhxw`JB.r=H#2M=W_');
if ( ! defined('NONCE_SALT'))
	define('NONCE_SALT',       	'{dkp`Bg|!k2HC4hMU$#AHfgb}JPQ>b~`&hy$OQWpWB-pUp<!U+ tcz7Wd301-J0u');

/**
* WordPress Database Table prefix.
*
* You can have multiple installations in one database if you give each a unique
* prefix. Only numbers, letters, and underscores please!
*/

$table_prefix = 'fp_';

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

if ( ENV_DEBUG == TRUE && ENV == local || dev) {

	define('WP_DEBUG', true);
	define('WP_DEBUG_LOG', true); // Stored in wp-content/debug.log
	define('WP_DEBUG_DISPLAY', false);

	define('SCRIPT_DEBUG', true);
	define('SAVEQUERIES', true);

} else if (ENV_DEBUG == TRUE && ENV == stage) {

	define('WP_DEBUG', true);
	define('WP_DEBUG_LOG', true); // Stored in wp-content/debug.log
	define('WP_DEBUG_DISPLAY', false);

} else {

	define('WP_DEBUG', false);
}


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined('ABSPATH'))
define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');