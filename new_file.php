<?php
$servername = "10.10.11.2";
$username = "qi";
$password = "password";
$dbname = "SH_Stock_Exchange";
 //echo "securityid: " . $row["securityid"]. " - datetime: " . $row["datetime"]. "<br>";
 
 // 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT securityid,datetime FROM his_cff WHERE securityid=\'IC0001\' AND datetime>20190918 ORDER BY datetime DESC";
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "securityid: " . $row["securityid"]. " - datetime: " . $row["datetime"]. "<br>";
    }
} else {
    echo "0 结果";
}
$conn->close();
 
?>