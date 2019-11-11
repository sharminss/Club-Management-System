<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$location=mysql_real_escape_string($_GET['place']);
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="UPDATE location SET place='".$location." '";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/location.php?id='.$id);

?>