<?php
define('DIR_BASE', dirname(dirname(__FILE__)) . '/');
define('DIR_SYSTEM', DIR_BASE . 'BUW3213_group/');
define('DIR_VIEW', DIR_SYSTEM . 'view/');
define('DIR_LAYOUT', DIR_SYSTEM . 'layout/');
define('DIR_IMAGE', DIR_SYSTEM . 'image/');

define('URI_BASE', '/');
define('URI_SYSTEM', URI_BASE . 'BUW3213_group/');
define('URI_VIEW', URI_SYSTEM . 'view/');



/* Database credentials. Assuming we are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'demo');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
