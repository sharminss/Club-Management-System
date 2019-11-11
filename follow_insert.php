<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$fblink=$_GET['fblink'];
$glink=$_GET['glink'];
$tlink=$_GET['tlink'];
$ylink=$_GET['ylink'];

$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into follow(fblink,glink,tlink,ylink) values('".$fblink." ',' ".$glink." ','".$tlink." ','".$ylink." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/follow.php?id='.$id);

?>

