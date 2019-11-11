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


     .card {
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        width: 100%;
        border-radius: 5px;
        background-color: #d5dae2;
    }

    .card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }


    


    </style>
    
   
  </head>
  <body style="max-width: 100%;
    overflow-x: hidden;">


  <!-- ************* Navbar Start *************-->

  	 <?php include 'common_navbar.php';?>


  <!-- ************* Navbar End *************-->

   

  <!-- ************* Body part Start *************-->

  <div class="col-md-2" style="background-color: #c0c5ce; height: 3000px;">
  	

  	 <?php include 'admin_sidebar.php';?>


  </div>


     



  <div class="col-md-10" style="">

    <div class="show_other" style=" ">


       



    </div> 


    <div class="show_profile" style="display: none;margin-top: 100px;">
      
        




    </div> 
  	
  



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



   <!-- Post Edit Modal -->


  <div class="modal fade" id="myModal_edit_session" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header mh" style="background-color: #0a2a5e">
          <button type="button" class="close" data-dismiss="modal"  id="" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="" style="color: #fff; text-align: center;" >POST</h4>
        </div>

        <div class="modal-body">

         <div id="post_edit_body_alert" style="display: none;">
           

         </div>
         
         <div id="post_edit_body">
           

         </div>
          

        </div>

        <div class="modal-footer">


       
          <button type="button" class="btn btn-primary" id="save_post_edit">Save</button>
          <button type="button" class="btn btn-danger" id="" data-dismiss="modal">Close</button>
        


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


 // ***************** Show Password admin_action1.php *****************//


function myPassword() {
  
    var x = document.getElementById("pass_u");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}





// ****************** Previous Posts ******************//




   $.ajax({

           url:"admin_action2.php",

           method:"POST",

           data:{ prev_all_posts:1 },

           success:function(data){


             $(".show_other").html(data);


         }




      })






  </script>	
  </body>

  </html>