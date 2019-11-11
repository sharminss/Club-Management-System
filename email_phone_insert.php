<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$about_header=$_GET['email'];
//echo $about_header;
$about_description=$_GET['phone'];
//echo $about_description;
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into email_phone(email,phone) values('".$about_header." ',' ".$about_description." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/email&phone.php?id='.$id);

?>