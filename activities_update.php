<?php
session_start();
$conn=mysqli_connect("localhost","root","","literatute_club");
$id=$_SESSION['id'];

$nid=$_SESSION['id1'];


$name=$_POST['aname'];
echo $name;
$des=mysql_real_escape_string($_POST['adesc']);
echo $des;
if(isset($_POST["update"])) {
	
$query2="UPDATE activities SET aname='".$name." ',adesc='".$des." ' where id=$nid";
$result3 = mysqli_query($conn,$query2);

header( 'Location:http://localhost/WEB/activities_details.php?nid='.$nid);

}


if(isset($_POST["del"])) {
	
$query2="DELETE FROM activities where id=$nid";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/activities.php');

}
if(isset($_POST["back"])) {
	
header('Location: http://localhost/WEB/activities.php');

}


?>