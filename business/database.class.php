<?php 
/*
 * Класс DataBase создает соединение с базой данных
 */
  class DataBase
  {
	public static $mConnect;	// Хранится результат соединения с базой данных
	public static $mSelectDB;	// Хранится результат выбора базы данных  
	
        /*
         * Метод Connect создает за соединение с базой данных.
         * Если соединение не создано возвращает сообщение об ошибке.
         * 
         * @param <string> $host - IP сервера
         * @param <string> $user - имя пользователя
         * @param <string> $pass - пароль пользователя
         * @param <string> $name - имя базы данных
         * 
         */
	public static function Connect($host, $user, $pass, $name)
	{
		// Пробуем создать соединение с базой данных
		self::$mConnect = mysql_connect($host, $user, $pass);
		
		// Если подключение не прошло, вывести сообщение об ошибке..
		if(!self::$mConnect)
		{
			echo "<p><b>К сожалению, не удалось подключиться к серверу MySQL</b></p>";
			//exit();
		}
		
		// Пробуем выбрать базу данных
		self::$mSelectDB = mysql_select_db($name, self::$mConnect);
		
		// Если база данных не выбрана, вывести сообщение об ошибке..
		if(!self::$mSelectDB)
		{
			echo "<p><b>".mysql_error()."</b></p>";
			//exit();
		}
		
		// Устанавливаем кодировку utf-8		
		mysql_query("SET NAMES 'utf8'");
			
		// Возвращаем результат
		return self::$mConnect;
	}
	
        /*
         * Метод Close закрывает соединение с базой данных. 
         * Возвращает результат
         */
	public static function Close()
	{
		// Возвращает результат
		return mysql_close(self::$mConnect);
	}
  }
?>