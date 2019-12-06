<?php
// database connection ...
require('database.php');
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



?>