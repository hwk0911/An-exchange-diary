<?php

$mysql_hostname = 'localhost';
$mysql_username = 'root';
$mysql_password = 'root';
$mysql_database = 'tutorials';
$mysql_port = '3306';

$connect = mysqli_connect($mysql_hostname, $mysql_username, $mysql_password, $mysql_database);

mysqli_select_db($connect, $mysql_database) or die('DB 선택 실패');

$searchName = $_POST['name'];

$sql = "SELECT * FROM tutorials WHERE searrch='$searchName' LIMIT 5";

$rs = mysqli_query($connect, $sql);

while($info=mysqli_fetch_array($rs)){

echo "Col1 : ".$info['필드명1']."<br/>";
echo "Col2 : ".$info['필드명2']."<br/>";
echo "Col3 : ".$info['필드명3']."<br/>";
echo "Col4 : ".$info['필드명4']."<br/>";
echo "Col5 : ".$info['필드명5']."<br/>";
echo "Col6 : ".$info['필드명6']."<br/>"."<br/>";

}

mysqli_close($connect);

?>