<?php

// Создаем сессию или продолжаем текущую
//session_start();

// Подключаем служебные файлы 
require_once 'include/config.php';

// Загружаем соединение с базой данных 
require_once BUSINESS_DIR . 'database.class.php';

// Загружаем уровень логики приложения

require_once BUSINESS_DIR . 'send_mail.class.php';

require_once BUSINESS_DIR . 'admin_orders.class.php';


// Соединение с базой данных
//DataBase::Connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

require_once INCLUDE_DIR . 'store_front.php';

// Закрываем соединение с базой данных
//DataBase::Close();
?>

