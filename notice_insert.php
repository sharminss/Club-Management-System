<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$header=$_GET['notice_header'];
$description=mysql_real_escape_string($_GET['notice_detail']);
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into notice(head,body) values('".$header." ',' ".$description." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/Notice.php?id='.$id);

?>