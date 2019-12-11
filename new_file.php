<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "financial";
//$dbname = "SH_Stock_Exchange";
 //echo "securityid: " . $row["securityid"]. " - datetime: " . $row["datetime"]. "<br>";
 // 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
//$sql = "SELECT securityid,datetime FROM his_cff WHERE securityid=\'IC0001\' AND datetime>20190918 ORDER BY datetime DESC";
$sql = "SELECT * FROM data";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "securityid: " . $row["datetime"]. " - datetime: " . $row["value"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
 
?>