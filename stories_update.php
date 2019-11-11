<?php
session_start();
$id=$_SESSION['id'];
echo $id;


if (isset($_REQUEST['upload']))
	
{
	
$name=$_FILES['uploadvideo']['name'];
 $type=$_FILES['uploadvideo']['type'];
//$size=$_FILES['uploadvideo']['size'];
$head=$_POST['header'];
$cname=str_replace(" ","_",$name);
$tmp_name=$_FILES['uploadvideo']['tmp_name'];
$target_path="video/";
$target_path=$target_path.basename($cname);
echo $cname;
if(move_uploaded_file($_FILES['uploadvideo']['tmp_name'],$target_path))
{
$conn=mysqli_connect("localhost","root","","literatute_club");

$query2="UPDATE stories SET header='".$head." ',filename='".$cname."'";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/stories.php?id='.$id);

}
else
{
	$conn=mysqli_connect("localhost","root","","literatute_club");

	$query2="UPDATE stories SET header='".$head." '";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/stories.php?id='.$id);
}

}



?>