<?php
include('config.php');
echo "<html>";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("连接数据库时发生错误");
} 
echo "<p>正在跳转中...</p>";
$link_id=$_GET['id'];
$sql = "SELECT * FROM `".$prefix."links` where id = ".$link_id;
$result = mysqli_query($conn, $sql);
$row = $result->fetch_assoc();
if($row["url"]==""){die("跳转失败:找不到跳转目标");}
echo "<script language=\"javascript\" type=\"text/javascript\"> 
setTimeout(\"javascript:location.href='".$row["url"]."'\", 5000); 
</script>";
$conn->close();
?>
