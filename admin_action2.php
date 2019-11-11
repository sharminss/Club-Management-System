<?php

mysql_connect("localhost","root","");

mysql_select_db("literatute_club");

session_start();
                  

// ********************* Disable President **********************//


if(isset($_POST['pres_dis']))
{
   $id=$_POST['id'];
  

   //$date=date('Y-m-d');


        $date=new DateTime();
        $date->modify("+4 hours");
        $dt = $date->format('F j, Y');
        
   
   $q="update register_user set end_date='$dt',status=7 where id=".$id."";

   if($res=mysql_query($q))
   {
      echo '67';
   }
   else
   {
      echo '99';
   }
}                  


// ******************** Make New Post *********************


if(isset($_POST['create_post']))
{

	



     echo '

        <div class="col-md-1"></div>

        <div class="col-md-10">

            <div style="margin-top:70px;background-color: #337AB7;text-align:center;" class="alert alert-success" role="alert"><b style="color:#fff;">CREATE POST</b></div>

	        <form id="fm_payment_process">

				  <div class="form-group">
				    <label for="">Post Topic</label>
				    <input type="text" class="form-control" id="payment_medium" placeholder="Enter payment Medium e.g.( BKash )">
				     <span class="error_form" id="pay_error"></span>
				  </div>

				  <div class="form-group">
				    <label for="">Post In Detail</label>
				    <textarea class="form-control" rows="6" id="payment_process" placeholder="Enter Process"></textarea>
				     <span class="error_form" id="pay_des_error"></span>
				  </div>


		         <div align="center">

			         
			          <button type="submit" class="btn btn-primary btn-lg" id="save_payment_process" evt_id="'.$id.'">POST</button>

		         </div>   

			</form>


			

           <hr>
			


	      ';



	 



   $query5="select * from post where creator_id=".$_SESSION['id']." order by id desc";

   if($res5=mysql_query($query5))
   {
   	  $n=mysql_num_rows($res5);

   	  if($n==0)
   	  {
         
         echo '

          <div style="margin-top:30px;text-align:center;background-color: #337AB7;color:#fff" class="alert alert-success" role="alert"><b>NO POSTS</b></div>';


   	  }
   	  else
   	  {

   	  	      echo '

               <div style="margin-top:30px;text-align:center;background-color: #337AB7;color:#fff" class="alert alert-success" role="alert"><b>MY POSTS</b></div>';
   	  	 

	          while ($row5=mysql_fetch_assoc($res5)) {

	          	        //$des=nl2br(htmlspecialchars($row5["description"]));


	          	        	echo '

	          	        	      
							       
						            
						            <div style="margin-bottom:30px;padding:22px;" class="card">
									 
									  <div class="" style="padding:15px;">

									    


									    <h4><b>'.$row5['creator_name'].'</b></h4> 
									    <p>'.$row5['deg'].'  &nbsp;&nbsp;  '.$row5['time'].'</p>

									     <h4 style="margin-top:15px;"><b>'.$row5['medium'].'</b></h4>
									     <h4 style="font-size:17px;">
									       '.nl2br($row5['process']).'

									      </h4>  

									      <hr>

									     <div align="" style="margin-top:20px;">
                                         
                                           <button style="margin-right:10px;" type="submit" class="btn btn-primary btn-md" id="update_post" post_id="'.$row5['id'].'" id="'.$_SESSION['id'].'">Edit</button><button type="submit" class="btn btn-danger btn-md" post_id="'.$row5['id'].'" id="delete_post" id="'.$_SESSION['id'].'">Delete</button>

									     </div>

									     

									  </div>


									</div>

									

							';
     
	                     



	                  }

	                    

   	  }
   }    



      echo    '</div>
		
		 <div class="col-md-1"></div>

	  ';    





}


// ************** Add Post **************** //

if(isset($_POST['payment_prc_add']))
{
  $id=$_SESSION['id'];

  $des=$_SESSION['ds'];

  $st=$_SESSION['st'];

  $fn=$_SESSION['fm'];

  $ln=$_SESSION['ln'];

  $head=$_POST['head'];



  $desc= addslashes($_POST['descc']);

  $date=new DateTime();
  $date->modify("+4 hours");
  $dt = $date->format('F j, Y, g:i a');


          if($des==1 && $st==1)
           {
             $d="President";
           }
           else if($des==2 && $st==2)
           {
             $d="Vice Precident(Publication)";
           }
           else if($des==3 && $st==3)
           {
              $d="Vice Precident(Organization)";
           }
           else if($des==4 && $st==4)
           {
              $d="Vice Precident(Cultural)";
           }
           else if($des==5 && $st==5)
           {
              $d="Club Coordinator";
           }
           else if($des==6 && $st==6)
           {
              $d="Member";
           }
           else if($des==1 && $st==7)
           {
             $d="Previous President";
           }
           else if($des==2 && $st==8)
           {
             $d="Previous Vice Precident(Publication)";
           }
           else if($des==3 && $st==8)
           {
              $d="Previous Vice Precident(Organization)";
           }
           else if($des==4 && $st==8)
           {
              $d="Previous Vice Precident(Cultural)";
           }
           else if($des==5 && $st==9)
           {
              $d="Previous Club Coordinator";
           }
           else if($des==6 && $st==10)
           {
              $d="Previous Member";
           }
           else if($des==1000)
           {
              $d="Super Admin";
           }


          // echo $id.$des.$st.$fn.$ln.$d.$head.$dt;

           $name=$fn.' '.$ln;
           



  $query="insert into post(medium,process,creator_id,time,deg,creator_name) values('$head','$desc',$id,'$dt','$d','$name')";



  if(mysql_query($query))
  {
    echo 4;
  }
  else
  {
    echo 'ff';
  }


}





// ********************* All Previous Posts **********************//


if(isset($_POST['prev_all_posts']))
{

	echo '

	<div class="col-md-1"></div>

    <div class="col-md-10">';

  



   $query5="select * from post order by id desc";

   if($res5=mysql_query($query5))
   {
   	  $n=mysql_num_rows($res5);

   	  if($n==0)
   	  {

   	            	 if($_SESSION['ds']==1 && $_SESSION['st']==0)
		             {
		               echo '<div style="margin-top:88px;text-align:center" class="alert alert-danger" role="alert"><b> Your Request Has been sent to Super Admin </b></div>';
		             }
		           else if($_SESSION['st']==0)
		             {
		               echo '<div style="margin-top:88px;text-align:center" class="alert alert-danger" role="alert"><b> Your Request Has been sent to President</b></div>';
		             }
		           else if($_SESSION['st']==100)
		             {
		               echo '<div style="margin-top:88px;text-align:center" class="alert alert-danger" role="alert"><b> Your Request is not accepted. Sorry!!</b></div>';
		             }
		           else
		             {
                         echo '<div style="margin-top:70px;text-align:center;background-color: #337AB7" class="alert alert-success" role="alert"><b
   	  	     style="color:#fff;">NO POST</b></div>';
		             }
         
       

   	  }
   	  else
   	  {

   	  	    if($_SESSION['st']!=0 && $_SESSION['st']!=100){


   	  	     echo '<div style="margin-top:70px;text-align:center;background-color: #337AB7" class="alert alert-success" role="alert"><b
   	  	     style="color:#fff;">ALL POSTS</b></div>';
   	  	 

	          while ($row5=mysql_fetch_assoc($res5)) {

	          	        //$des=nl2br(htmlspecialchars($row5["description"]));


	          	        	echo '
							       
						            
						            <div style="margin-bottom:30px;padding:20px;" class="card">
									 
									  <div class="" style="padding:15px;">

									    <h4><b>'.$row5['creator_name'].'</b></h4> 
									    <p>'.$row5['deg'].'  &nbsp;&nbsp;  '.$row5['time'].'</p>

									     <h4 style="margin-top:15px;"><b>'.$row5['medium'].'</b></h4>
									     <h4 style="font-size:17px;">'.nl2br($row5['process']).'</h4>  



									  </div>


									</div>

							';
     
	                     



	                  }
	              }
	               else if($_SESSION['ds']==1 && $_SESSION['st']==0)
		             {
		               echo '<div style="margin-top:88px;text-align:center" class="alert alert-danger" role="alert"><b> Your Request Has been sent to Super Admin </b></div>';
		             }
		           else if($_SESSION['st']==0)
		             {
		               echo '<div style="margin-top:88px;text-align:center" class="alert alert-danger" role="alert"><b> Your Request Has been sent to President</b></div>';
		             }
		           else if($_SESSION['st']==100)
		             {
		               echo '<div style="margin-top:88px;text-align:center" class="alert alert-danger" role="alert"><b> Your Request is not accepted. Sorry!!</b></div>';
		             }

	                    

   	  }
   }    



      echo    '</div>
		
		 <div class="col-md-1"></div>

	  ';    



   
}     





// *************** Edit Post ***************8//


if(isset($_POST['post_update']))
{
	$id=$_POST['id'];



	$query="select * from post where id=".$id."";

	if($res=mysql_query($query))
	{

        $row=mysql_fetch_assoc($res);

       

        $rul=$row['medium'];

        $fee=$row['process'];




		echo '


             
                       <form id="pay_proc_edit__details">


                                  <input type="hidden" name="edit_post_id" id="edit_post_id" value="'.$id.'" id="edit_post">

                                

						          <div class="form-group">

								    <label for="">payment Medium</label>
								    <input type="text" class="form-control medium_edit_head_99" placeholder="Payment Medium" value="'.$rul.'">
								     <span class="error_form" id="event_error_edit_pay_medium"></span>
                 
								    
								  </div>

								   <div class="form-group">

								    <label for="">Payment Process</label>

								    <textarea class="form-control process_edit_rul_99" rows="10" cols="70" placeholder="Payment process">'.$fee.'</textarea>
                                    <span class="error_form" id="event_error_edit_pay_proc_desc"></span>
								    
								   </div>

								   

						          

							</form>



		';
	}
}      





// ***************** Update Post **************// 

if(isset($_POST['edit_post_done_']))
{
	$id=$_POST['id'];

	//echo $id;


	$md=addslashes($_POST['hd']);

	$pr=addslashes($_POST['ds']);




	
		 $query="update post set medium='".$md."', process='".$pr."' where id=".$id."";

		
		 if(mysql_query($query))
		 {
		 	echo 4;
		 }
		 else 
		 {
		 	echo 'uu';
		 }
	


   

}






// *************** Delete Post ***************//


if(isset($_POST['post_delete']))
{
	$s_id=$_POST['id'];



	$query="delete from `post` where id=".$s_id."";

	if(mysql_query($query))
	{
		echo 4;
	}
	else
	{
		echo 'ff';
	}
}


?>