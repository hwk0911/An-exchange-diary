<?php

$mysqli_hostname = 'localhost';
$mysqli_username = 'root';
$mysqli_password = 'root';
$mysqli_database = 'account';
$mysqli_port = '3306';

$connect = mysqli_connect($mysqli_hostname, $mysqli_username, $mysqli_password, $mysqli_database);

mysqli_select_db($connect, $mysqli_database) or die('DB 선택 실패');

$sql = "SELECT * FROM account";

$rs = mysqli_query($connect, $sql);

while($info=mysqli_fetch_array($rs)){

echo "ID : ".$info['ID']."<br/>";
echo "PW : ".$info['PW']."<br/><br/>";

}

mysqli_close($connect);

?>