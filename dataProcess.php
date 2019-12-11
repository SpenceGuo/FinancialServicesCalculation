<?php
// database connection ...
//require('database.php');
//$db = new dbconfig();
//
//$host = $db->hostValue();
//$username = $db->usernameValue();
//$password = $db->passwordValue();
//$dbname = $db->dbnameValue();

$conn = new mysqli("10.10.11.2","qi","password","SH_Stock_Exchange");

// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
   
$sql = "SELECT securityid,datetime FROM his_cff WHERE securityid=\'IC0001\' AND datetime>20190918 ORDER BY datetime DESC";
$result = $conn->query($sql);
   
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["securityid"]. " - Name: " . $row["datetime"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();

//echo "<br />";

//$stockData = array(
//array(1,2,3),
//array(4,5,6),
//array(7,8,9)
//);
//$arr = json_encode($stockData);
//
//print_r($arr);


?>