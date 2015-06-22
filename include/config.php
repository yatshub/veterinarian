<?php
// Полный путь к папке, где лежат файли и папки сайта 
define('DIRNAME', dirname(dirname(__FILE__)));

// Когда на localhost: 
//define('HTTP_HOST', 'http://' . $_SERVER['SERVER_NAME'] . '/veterinarian/');
define('HTTP_HOST_PRO', HTTP_HOST . 'protected/');
 
// Когда на сервере: 
define('HTTP_HOST', 'http://' . $_SERVER['SERVER_NAME'] . '/');

// Папки приложения
define('BUSINESS_DIR', DIRNAME . '/business/');
define('INCLUDE_DIR',  DIRNAME . '/include/');

// Настройки, необходымые для конфигурирования шаблона 
define('TEMPLATE_DIR', INCLUDE_DIR . 'templates/');

// Параметры соединения с базой данных на localhost
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', 'password');
// define('DB_DATABASE', 'infoservises');

?>

