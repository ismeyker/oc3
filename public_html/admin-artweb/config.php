<?php
include("../config_my.php");
// HTTP
define('HTTP_SERVER', 'http://'.$web_name.'/admin-artweb/');
define('HTTP_CATALOG', 'http://'.$web_name.'/');

// HTTPS
define('HTTPS_SERVER', 'http://'.$web_name.'/admin-artweb/');
define('HTTPS_CATALOG', 'http://'.$web_name.'/');

// DIR
define('DIR_APPLICATION', $web_path.'/admin-artweb/');
define('DIR_SYSTEM', $web_path.'/system/');
define('DIR_IMAGE', $web_path.'/image/');
define('DIR_STORAGE', $web_path.'/../storage/');
define('DIR_CATALOG', $web_path.'/catalog');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
// define('DB_DRIVER', 'mysqli');
// define('DB_HOSTNAME', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_DATABASE', 'opencart3');
// define('DB_PORT', '3306');
// define('DB_PREFIX', '33dk_');

// OpenCart API
define('OPENCART_SERVER', 'https://www.opencart.com/');
