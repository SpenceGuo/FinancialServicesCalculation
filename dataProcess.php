<?php
// database connection ...
require('database.php');
$db = new dbconfig();
//$host = $db->hostValue().':'.$db->portValue();
$host = $db->hostValue();
$conn = new mysqli($host,$db->usernameValue(),$db->passwordValue());

if ($conn->connect_error) 
{
    die("连接失败: " . $conn->connect_error);
}
else{
	echo "连接成功<br />";
}

//$sql = 'SELECT securityid,datetime FROM his_cff WHERE securityid=\'IC0001\' AND datetime>20190918 ORDER BY datetime DESC';
//print($sql);
//
//$result = mysql_query($sql);
//
//if (mysql_num_rows($result) > 0) {
//  // 输出数据
//  $arr = mysql_fetch_array($result);
//	print_r($arr);
//	$arr_securityid = $arr["securityid"];
//	$arr_datetime = $arr["datetime"];
	
//  while($row = $result->fetch_assoc()) {
//      echo "securityid: " . $row["securityid"]. " - datetime: " . $row["datetime"]."<br>";
//  }
//} else {
//  echo "0 结果";
//}
//$conn->close();


echo "<br />";

$stockData = array(
array(1,2,3),
array(4,5,6),
array(7,8,9)
);
$arr = json_encode($stockData);

print_r($arr);


?>