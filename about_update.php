<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$about_header=$_GET['ABOUT_HEADER'];
echo $about_header;
$about_description= mysql_real_escape_string($_GET['DESCRIPTION']);
echo $about_description;
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="UPDATE about SET header='".$about_header." ',description='".$about_description." '";
$result3 = mysqli_query($conn,$query2);
if($result3) // will return true if succefull else it will return false
{
echo "yes";
}
else
{
	echo "no";
}
header('Location: http://localhost/WEB/About.php?id='.$id);

?>