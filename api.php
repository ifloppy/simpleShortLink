<?php
include('config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "INSERT INTO `".$prefix."links` (`id`, `url`) VALUES (NULL, '".$_GET['url']."')";

if ($conn->query($sql) === TRUE) {
    echo "添加成功，链接ID:".$conn->insert_id."，ID用法:本站URL+URL ID即可自动跳转";
} else {
    echo "添加失败";
}

$conn->close();
?>
