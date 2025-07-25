<?php
// ** MySQL settings ** //
define( 'DB_NAME', 'database-1' );
define( 'DB_USER', 'admin' );
define( 'DB_PASSWORD', 'AKIAQSOI4WU4K2EJ6ZUQ' );
define( 'DB_HOST', 'database-1.c0fk6uama867.us-east-1.rds.amazonaws.com' ); // e.g., localhost or RDS endpoint
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

// ** Authentication Unique Keys and Salts. **
define( 'AUTH_KEY',         'put-your-unique-phrase-here' );
define( 'SECURE_AUTH_KEY',  'put-your-unique-phrase-here' );
define( 'LOGGED_IN_KEY',    'put-your-unique-phrase-here' );
define( 'NONCE_KEY',        'put-your-unique-phrase-here' );
define( 'AUTH_SALT',        'put-your-unique-phrase-here' );
define( 'SECURE_AUTH_SALT', 'put-your-unique-phrase-here' );
define( 'LOGGED_IN_SALT',   'put-your-unique-phrase-here' );
define( 'NONCE_SALT',       'put-your-unique-phrase-here' );

// Get your unique keys from: https://api.wordpress.org/secret-key/1.1/salt/

$table_prefix = 'wp_'; // Change if you're running multiple WordPress installs in one database

define( 'WP_DEBUG', false ); // Set to true for debugging

// ** Optional: define site URL if needed **
// define('WP_HOME','http://example.com');
// define('WP_SITEURL','http://example.com');

// ** Absolute path to the WordPress directory. **
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

// ** Sets up WordPress vars and included files. **
require_once ABSPATH . 'wp-settings.php';
