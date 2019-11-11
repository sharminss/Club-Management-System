<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$name=$_GET['aname'];
$des=mysql_real_escape_string($_GET['adesc']);
$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into activities(aname,adesc) values('".$name." ',' ".$des." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/activities.php?id='.$id);

?>