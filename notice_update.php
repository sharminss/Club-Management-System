

<?php
session_start();
$conn=mysqli_connect("localhost","root","","literatute_club");
$id=$_SESSION['id'];

$nid=$_SESSION['id1'];


$header=$_POST['head'];
$description=mysql_real_escape_string($_POST['body']);
if(isset($_POST["update"])) {
	
$query2="UPDATE notice SET head='".$header." ',body='".$description." ' where id=$nid";
$result3 = mysqli_query($conn,$query2);

header( 'Location:http://localhost/WEB/notice_delails.php?nid='.$nid);

}


if(isset($_POST["del"])) {
	
$query2="DELETE FROM notice where id=$nid";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/Notice.php');

}
if(isset($_POST["back"])) {
	
header('Location: http://localhost/WEB/Notice.php');

}


?>