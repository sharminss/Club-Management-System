<?php
session_start();
$conn=mysqli_connect("localhost","root","","literatute_club");
$id=$_SESSION['id'];

$nid=$_SESSION['id1'];

$head=$_POST['head'];
echo $head;
$des=mysql_real_escape_string($_POST['bdesc']);
$lname=$_POST['lname'];
$link=$_POST['link'];
if(isset($_POST["update"])) {
	
$query2="UPDATE breaking SET head='".$head."',bdesc='".$des."',linkname='".$lname."',link='".$link."' where id=$nid";
$result3 = mysqli_query($conn,$query2);

header( 'Location:http://localhost/WEB/breaking_details.php?nid='.$nid);

}


if(isset($_POST["del"])) {
	
$query2="DELETE FROM breaking where id=$nid";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/breaking.php');

}
if(isset($_POST["back"])) {
	
header('Location: http://localhost/WEB/breaking.php');

}


?>