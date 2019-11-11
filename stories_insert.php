<?php
session_start();
$id=$_SESSION['id'];
echo $id;
if (isset($_REQUEST['submit']))
{
$name=$_FILES['uploadvideo']['name'];
 $type=$_FILES['uploadvideo']['type'];
//$size=$_FILES['uploadvideo']['size'];
$head=$_POST['header'];
$cname=str_replace(" ","_",$name);
$tmp_name=$_FILES['uploadvideo']['tmp_name'];
$target_path="video/";
$target_path=$target_path.basename($cname);
if(move_uploaded_file($_FILES['uploadvideo']['tmp_name'],$target_path))
{
$conn=mysqli_connect("localhost","root","","literatute_club");

echo $sql="INSERT INTO stories(header,filename,fileextension) VALUE('".$head."','".$cname."','".$type."')"; 
$result3 = mysqli_query($conn,$sql);
header('Location: http://localhost/WEB/stories.php?id='.$id);
}
}
?>