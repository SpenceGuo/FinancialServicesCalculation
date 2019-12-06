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

$stockData = array(
array(1,2,3),
array(4,5,6),
array(7,8,9)
);
$arr = json_encode($stockData);
print_r($arr);

?>