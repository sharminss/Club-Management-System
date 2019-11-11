<?php
session_start();
$id=$_SESSION['id'];
echo $id;



$ename=$_GET['ename'];
$link=$_GET['link'];
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="UPDATE event_link SET ename='".$ename." ',link='".$link." '";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/event_link.php?id='.$id);

?>