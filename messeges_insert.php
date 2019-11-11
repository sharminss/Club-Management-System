
<?php
session_start();
$id=$_SESSION['id'];
echo $id;
if (isset($_REQUEST['submit']))
{
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
if(move_uploaded_file($_FILES['image']['tmp_name'],$target_path))
{
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into messeges(personname,designation,image,messeges) values('".$pname." ',' ".$des." ','".$cname."','".$mes." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/messeges.php?id='.$id);

}
}
?>