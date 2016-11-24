<?php 

class Databaseconnect
{
	private static $db;

	public static function getDatabase()
	{
		if(self::$db === null)
		{
		$db = new PDO('mysql:host=127.0.0.1;port=8889;dbname=MyBlog;charset=utf8', 'root', 'root');
		
    	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	}
    	return $db;

	}

}