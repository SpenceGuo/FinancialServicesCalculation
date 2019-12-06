<?php
class dbconfig
{
	public static $host = '202.120.36.29';
	public static $port = '23306';
	public static $username = 'qi';
	public static $password = 'password';
	public static $dbname = 'SH_Stock_Exchange';
	
	public function hostValue()
	{
		return self::$host;
	}
	
	public function portValue()
	{
		return self::$port;
	}
	
	public function usernameValue()
	{
		return self::$username;
	}
	
	public function passwordValue()
	{
		return self::$password;
	}
	
	public function dbnameValue()
	{
		return self::$dbname;
	}
}

// database connection test......
$db = new dbconfig();
$host = $db->hostValue().':'.$db->portValue();
$conn = new mysqli($host,$db->usernameValue(),$db->passwordValue());

if ($conn->connect_error) 
{
    die("连接失败: " . $conn->connect_error);
}
else{
	echo "连接成功<br />";
}

print $db->hostValue();

?>