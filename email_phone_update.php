<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$email=$_GET['email'];
$phone=$_GET['phone'];
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="UPDATE email_phone SET email='".$email." ',phone='".$phone." '";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/email&phone.php?id='.$id);

?>