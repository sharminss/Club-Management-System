<?php
session_start();
$id=$_SESSION['id'];
echo $id;


$name=$_POST['ename'];
$link=$_POST['link'];
$edesc=mysql_real_escape_string($_POST['edesc']);


$conn=mysqli_connect("localhost","root","","literatute_club");
$query2="insert into up_events(ename,link,edesc) values('".$name." ',' ".$link." ',' ".$edesc." ')";
$result3 = mysqli_query($conn,$query2);
header('Location: http://localhost/WEB/up_event.php?id='.$id);

?>

