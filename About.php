<?php

mysql_connect("localhost","root","");

mysql_select_db("literatute_club");

session_start();


if(!isset($_SESSION['fm']) && !isset($_SESSION['em']) && !isset($_SESSION['id']) && !isset($_SESSION['st']))
{
  header("location:index.php");
}
                  
$id=$_SESSION['id'];

$directoryURI =basename($_SERVER['SCRIPT_NAME']);




?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Index</title>

    <!--Css Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
      
     
     .error_form{

      font-size: 14px;

      color: #720b14;

     }

.textarea { 
color: inherit;
font: inherit;
margin: 0px;
}
    </style>
    
   
  </head>
  <body>



 <!-- ************* Navbar Start *************-->

  	 <?php include 'common_navbar.php';?>


  <!-- ************* Navbar End *************-->

  <!-- ************* Body part Start *************-->


  <div class="col-md-2" style="background-color: #c0c5ce; height: 3000px;">
  	
  <!-- ********************* Side Bar Add Start*******************--> 
  
   <ul class="nav nav-pills nav-stacked" style=" margin-top: 70px;">



      <li class="active" ><a  id=""  href="website_show.php" style="font-size: 15px;padding: 14px; text-align: center; color: #fff" > <span class="glyphicon glyphicon-eye-open"  style="margin-right: 10px" aria-hidden="true"></span>View Website</a></li>

       <p><br/></p>
      
      <li class="active" ><a  id=""  style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span>Website Content</a></li>
      </ul>
	  <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">
	   <li class="active" ><a  id="About" href="About.php" style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > 
	  <?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=1";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal11">edit</button>
		    <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	  <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>
	   
     

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> 
	   
		  
		 </li>
	    
       </ul>
	   	  <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id=""  href="Notice.php" style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span>
	   <?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=9";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal12">edit</button>
		    <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	  <div class="form-group"hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> 
	   
	   
	   </li>
       </ul>
       <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id=""  href="event_link.php" style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span><?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=5";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal13">edit</button>
		    <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	<div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id="" href="breaking.php" style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span><?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=3";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal14">edit</button>
		    <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	 <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id="" href="prev_event.php" style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span>
	   <?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=10";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal15">edit</button>
		    <div class="modal fade" id="myModal15" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	  <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id="" href="activities.php" style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span><?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=2";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal16">edit</button>
		    <div class="modal fade" id="myModal16" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	  <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id="" href="messeges.php"  style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span>
	   <?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=8";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal17">edit</button>
		    <div class="modal fade" id="myModal17" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	  <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>
<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id="" href="up_event.php" style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span>
	   <?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=12";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal18">edit</button>
		    <div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	  <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>
<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id="" href="stories.php"  style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span>
	   <?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=11";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal19">edit</button>
		    <div class="modal fade" id="myModal19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	<div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id=""href="#"  style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span>
	   <?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=13";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal110">edit</button>
		    <div class="modal fade" id="myModal110" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	 <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id=""  href="follow.php"style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span><?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=6";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal111">edit</button>
		    <div class="modal fade" id="myModal111" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	  <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id="" href="location.php" style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span>
	   <?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=7";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal112">edit</button>
		    <div class="modal fade" id="myModal112" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	  <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>
	   <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">

	   <li class="active" ><a  id="" href="email&phone.php"  style="font-size: 14px;padding: 10px; text-align: center; color: #fff" > <span class=""  style="margin-right: 10px" aria-hidden="true"></span><?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=4";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo '
	      <label value="'.$row['cat'].'">'.$row['cat'].'</label>
		  </a> <button type="submit" data-toggle="modal" data-target="#myModal118">edit</button>
		    <div class="modal fade" id="myModal118" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Update Content Name</h4>
      </div>
      <div class="modal-body">
	  <form action="Content_update/content_update_about.php" method="get">
	  <div class="form-group" hidden>
				    <label for="">ID:</label>
				    <input type="text" class="form-control" name="coid" id="head" value="'.$row['id'].'" readonly>
				  </div>
	  <div class="form-group">
				    <label for="">Name: </label>
				    <input type="text" class="form-control" name="coname" id="head" value="'.$row['cat'].'" required>
				  </div>

<button type="submit" class="btn-primary">UPDATE</button>
</form>

       
	 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
		';
		  
		   break;
		  }
		  ?> </li>
       </ul>

 <!-- ********************* Side Bar End *******************--> 
  </div>


     



  <div class="col-md-10" style="">

  <div class="show_other_2" style=" ">

  <!-- ******************  Content Add Start**********************-->
 <div style="margin-top:70px;background-color: #337AB7;text-align:center;" class="alert alert-success" role="alert"><b style="color:#fff;"> 
 <?php
		 
                 $conn=mysqli_connect("localhost","root","","literatute_club"); 

				$eql="SELECT * FROM catagories where id=1";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			  echo $row['cat'];
			  break;
		  }?></b></div>

          <?php
$conn=mysqli_connect("localhost","root","","literatute_club"); 
$eql="SELECT * FROM about ";
$result = $conn->query($eql);
$count=0;
 while($row = $result->fetch_assoc()) 
		  {
			  $count++;
		  }




        if($count>=1)
			{
				$eql="SELECT * FROM about";
              $result = $conn->query($eql);
		  while($row = $result->fetch_assoc()) 
		  {
			
		     echo'<form id="" action="about_update.php">
			
	         <div class="form-group">
				    <label for="">About Header</label>
				    <input type="text" class="form-control" id="ABOUT_HEADER" name="ABOUT_HEADER" value="'.$row['header'].'">
				  </div>

				  <div class="form-group">
				    <label for="">Description</label>
				    <textarea class="form-control" rows="6" id="DESCRIPTION" name="DESCRIPTION"  value="'.$row['description'].'">'.$row['description'].'</textarea>
				     
				  </div>
				  
				  <div align="center">

			         
			          <button type="submit" name="update" id="update" class="btn btn-primary btn-lg" id="" >UPDATE</button>

		         </div>  
				 </form>
				 ';
		    }
			}
			else
			{
			 echo'<form id="" action="about_insert.php">
			
	         <div class="form-group">
				    <label for="">About Header</label>
				    <input type="text" class="form-control" name="ABOUT_HEADER"   required>
				  </div>

				  <div class="form-group">
				    <label for="">Description</label>
				    <textarea class="form-control" rows="6" name="DESCRIPTION" placeholder="" required></textarea>
				     
				  </div>
				  
				  <div align="center">

			         
			          <button type="submit" class="btn btn-primary btn-lg" id="" >SUBMIT</button>

		         </div>  
				 </form>
				 ';
			}
			
		  
 ?>
	 </div>        

				  
				  


  
  <!-- ********************* Side Bar Add End *******************--> 
  </div> 



   <!-- Modal -->

  <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #113977">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="color: #fff"></h4>
        </div>
        <div class="modal-body" id="reg_detail">
         

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info " id="" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal -->

  <div class="modal fade" id="myModal_del" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #113977">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel_del" style="color: #fff"></h4>
        </div>
        <div class="modal-body" id="reg_detail_del">
         

        </div>
        <div class="modal-footer">
          <button type="button" id="yes_del" class="btn btn-danger" data-dismiss="modal">Yes</button>
          <button type="button" id="no_del" class="btn btn-success" data-dismiss="modal">No</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->

  <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #113977">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel2" style="color: #fff"></h4>
        </div>
        <div class="modal-body" id="reg_detail2">
         

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info close_up2" id="close_up2" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!-- ************* Body part End *************-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.2.1.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>
  <script src="js/action1.js"></script>
  <script src="js/action2.js"></script>
  

  <script type="text/javascript">
   

    
   $("#log_out").click(function(eve){

     eve.preventDefault();

     // window.location.href='index.php';


     // *************** Log Out admin_action1.php ************//


         $.ajax({
        
         url:"admin_action1.php",
         method:"POST",
         data:{ logout:1 },
         success:function(data)
         {

            if(data=='34'){

                window.location.href='index.php';

            }

             
            
         }
       

       }) 




   })


   // *************** Request admin_action1.php ************//


   function load_request(view="")
   {
     $.ajax({

       url:"admin_action1.php",

       method:"POST",

       data:{ view:view },

       dataType:"json",

       success:function(data)
       {
          $(".dm").html(data.request);
          $(".count").html(data.count);
       }


     })
   }


    function load_request1(view="")
   {
     $.ajax({

       url:"admin_action1.php",

       method:"POST",

       data:{ view1:view },

       dataType:"json",

       success:function(data)
       {
          $(".dm1").html(data.request);
          $(".count1").html(data.count);
       }


     })
   }



    load_request();

    load_request1();


  setInterval(function(){

     load_request();
     
     load_request1();


  },5000)







  </script>	

  </body>
  </html>