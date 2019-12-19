<?php
$servername = "10.10.11.2";
$username = "qi";
$password = "password";
$dbname = 'SH_Stock_Exchange';
 
// 创建连接
//$conn = new mysqli($servername, $username, $password,$dbname);
//$sql = "SELECT datetime,openpx,lastpx,lowpx,highpx FROM his_cff WHERE securityid=\'IC0001\' ORDER BY datetime ASC";
//$result = $conn->query($sql);
//if ($result->num_rows == 0)
//{
//	echo 'true';
//}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT datetime,openpx,lastpx FROM his_cff WHERE securityid=\'IC0001\' ORDER BY datetime ASC"); 
    $stmt->execute();
 
    // 设置结果集为关联数组
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>