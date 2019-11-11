<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$about_header=$_GET['ABOUT_HEADER'];
$about_description=mysql_real_escape_string($_GET['DESCRIPTION']);

$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into about(header,description) values('".$about_header." ',' ".$about_description." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/About.php?id='.$id);


?>

