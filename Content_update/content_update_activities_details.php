<?php
session_start();
$id=$_SESSION['id'];
echo $id;

$nid=$_SESSION['id1'];


$coid=$_GET['coid'];
echo $coid;

$coname= mysql_real_escape_string($_GET['coname']);
echo $coname;
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="UPDATE catagories SET cat='".$coname."' where id=$coid ";
$result3 = mysqli_query($conn,$query2);
if($result3) // will return true if succefull else it will return false
{
echo "yes";
}
else
{
	echo "no";
}
header('Location: http://localhost/WEB/activities_details.php?nid='.$nid);

?>