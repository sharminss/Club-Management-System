<?php
session_start();
$conn=mysqli_connect("localhost","root","","literatute_club");
$id=$_SESSION['id'];

$nid=$_SESSION['id1'];


$name=$_POST['ename'];
$link=$_POST['link'];

if(isset($_POST["update"])) {
	
$query2="UPDATE prev_events SET ename='".$name." ',link='".$link." ' where id=$nid";
$result3 = mysqli_query($conn,$query2);

header( 'Location:http://localhost/WEB/prev_event_details.php?nid='.$nid);

}


if(isset($_POST["del"])) {
	
$query2="DELETE FROM prev_events where id=$nid";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/prev_event.php');

}
if(isset($_POST["back"])) {
	
header('Location: http://localhost/WEB/prev_event.php');

}


?>