<?php
//此文件中的代码尚未进行实际测试，若出现错误请发送Issues
//在执行这份文件之前请先填写完整config.php
include('config.php');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$sql = CREATE TABLE `".$dbname."`.`".$prefix."_links` ( `id` INT NOT NULL AUTO_INCREMENT , `url` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = MyISAM;

if ($conn->query($sql) === TRUE) {
    echo "成功创建数据表，现在可以使用了";
} else {
    echo "无法创建数据表，告辞";
}

$conn->close();
?>
