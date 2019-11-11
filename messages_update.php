<?php
session_start();
$conn=mysqli_connect("localhost","root","","literatute_club");
$id=$_SESSION['id'];

$nid=$_SESSION['id1'];


$name=$_FILES['image']['name'];
 $type=$_FILES['image']['type'];
//$size=$_FILES['uploadvideo']['size'];
$pname=$_POST['pname'];

$des=$_POST['des'];

$mes=mysql_real_escape_string($_POST['message']);
$cname=str_replace(" ","_",$name);
$tmp_name=$_FILES['image']['tmp_name'];
$target_path="images/";
$target_path=$target_path.basename($cname);

if(isset($_POST["update"])) {
if(move_uploaded_file($_FILES['image']['tmp_name'],$target_path))
{
	$query2="UPDATE messeges SET personname='".$pname." ',designation='".$des." ',image='".$cname." ',messeges='".$mes." ' where id=$nid";
	$result3 = mysqli_query($conn,$query2);
	
	}
else
{
	$query2="UPDATE messeges SET personname='".$pname." ',designation='".$des." ',messeges='".$mes." ' where id=$nid";
	$result3 = mysqli_query($conn,$query2);
}
header( 'Location:http://localhost/WEB/message_delails.php?nid='.$nid);

}


if(isset($_POST["del"])) {
	
$query2="DELETE FROM messeges where id=$nid";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/messeges.php');

}
if(isset($_POST["back"])) {
	
header('Location: http://localhost/WEB/messeges.php');

}


?>