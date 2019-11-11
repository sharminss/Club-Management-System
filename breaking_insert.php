<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$head=$_GET['head'];
$des=mysql_real_escape_string($_GET['bdesc']);
$lname=$_GET['lname'];
$link=$_GET['link'];

$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into breaking(head,bdesc,linkname,link) values('".$head." ',' ".$des." ','".$lname." ',' ".$link." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/breaking.php?id='.$id);

?>