<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db_name');

/** MySQL database username */
define('DB_USER', 'username');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
* Unique Keys & Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*/
define('AUTH_KEY',         'Set your unique keys and salts here');
define('SECURE_AUTH_KEY',  'Set your unique keys and salts here');
define('LOGGED_IN_KEY',    'Set your unique keys and salts here');
define('NONCE_KEY',        'Set your unique keys and salts here');
define('AUTH_SALT',        'Set your unique keys and salts here');
define('SECURE_AUTH_SALT', 'Set your unique keys and salts here');
define('LOGGED_IN_SALT',   'Set your unique keys and salts here');
define('NONCE_SALT',       'Set your unique keys and salts here');