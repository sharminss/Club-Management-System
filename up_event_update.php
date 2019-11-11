<?php
session_start();
$conn=mysqli_connect("localhost","root","","literatute_club");
$id=$_SESSION['id'];

$nid=$_SESSION['id1'];


$name=$_POST['ename'];
$link=$_POST['link'];
$edesc=mysql_real_escape_string($_POST['edesc']);
if(isset($_POST["update"])) {
	
$query2="UPDATE up_events SET ename='".$name." ',edesc='".$edesc." ',link='".$link." ' where id=$nid";
$result3 = mysqli_query($conn,$query2);

header( 'Location:http://localhost/WEB/up_event_details.php?nid='.$nid);

}


if(isset($_POST["del"])) {
	
$query2="DELETE FROM up_events where id=$nid";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/up_event.php');

}
if(isset($_POST["back"])) {
	
header('Location: http://localhost/WEB/up_event.php');

}


?>