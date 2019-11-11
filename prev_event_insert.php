<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$name=$_POST['ename'];
$link=$_POST['link'];



$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into prev_events(ename,link) values('".$name." ',' ".$link." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/prev_event.php?id='.$id);

?>

