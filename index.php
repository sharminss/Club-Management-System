<?php

mysql_connect("localhost","root","");

mysql_select_db("literatute_club");

session_start();
                  

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

      color: #f95616;

     }


    </style>
   
  </head>
  <body style="background-image:url(back/Waves.jpg)">

  <!-- ************** Navbar start **************-->


  <nav class="navbar navbar-fixed-top" style="background-color:#313233">

  <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->


    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img id="brnd_new" alt="Brand" style="position: relative; max-width:100px; left: 15px; max-height: 60px; margin-top:-19px ; background-size: contain;" src="logo/aunkur_logo.png" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <form class="navbar-form navbar-right">

        <div class="form-group">

            <input type="email" class="form-control" name="lemail" placeholder="Email" id="lemail" required=""><br/>
            <span class="error_form" id="lemail_error"></span>

        </div>

        <div class="form-group">

            <input type="password" class="form-control" name="lpassword" id="lpassword" placeholder="Password" required=""><br/>
            <span class="error_form" id="lpassword_error"></span>

        </div>

        <button type="submit" id="login" class="btn btn-success">LogIn</button>

      </form>
     
    </div><!-- /.navbar-collapse -->

  </div><!-- /.container-fluid -->

</nav>
  
  <!-- ************* Navbar Ends *****************-->	

  <!-- ************* Body part start *************-->

   <p><br/></p>
    <p><br/></p>


  <!-- ************* Registration part start *************-->  
     

  <div class="col-md-6">
  	
   <div class="col-md-1"></div>
   <div class="col-md-11" style="margin-top: px;">
   	
   

		    <div class="registration_form_back" style="background-color: #0009; padding: 24px">
		     
		     <h2 style="text-align: center; padding:20px ; color: #fff; margin-bottom: 15px"><b>Admin Panel Registration</b></h2>
		    
		   
			    <form id="registration_form">

			    	<div class="col-sm-12">
			          <label  style="color: #fff">First Name:</label>
			          <input type="text" class="form-control" id="rfirstname" name="rfirstname" placeholder="First Name" required="">
			          <span class="error_form" id="rfirstname_error"></span>
			         </div>

			    

			           <div class="col-sm-12" style="margin-top: 10px">

			             <label for="lastname" style="color: #fff">Last Name:</label>
			             <input id="rlastname" class="form-control" type="text" name="rlastname"  placeholder="Last name" required="">
			             <span class="error_form" id="rlastname_error"></span>

			           </div>
			        
			        <div class="col-sm-12" style="margin-top: 10px">

			           <label  style="color: #fff">Designation:</label>
			          
			            <select  class="form-control" id="select_deg">


                      <option value="0">------SELECT-------</option>
                      <option value="1">President</option>
			            	  <option value="2">Vice President(Publication)</option>
			            	  <option value="3">Vice President(Organization)</option>
			            	  <option value="4">Vice President(Cultural)</option>
      							  <option value="5">Club Coordinator</option>
      							  <option value="6">Member</option>
							

			             

			            </select>

			            <span class="error_form" id="rdeg_error"></span>
			         

			        </div>

			     

			     
			         <div class="col-sm-12" style="margin-top: 10px">
			          <label  style="color: #fff">Email:</label>
			          <input type="email" class="form-control" id="remail" name="remail" placeholder="Email" required="">
			          <span class="error_form" id="remail_error"></span>
			         </div>

			      

			         <div class="col-sm-12" style="margin-top: 10px">
			          <label  style="color: #fff">Password:</label>
			          <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Password" required="">
			           <span class="error_form" id="rpassword_error"></span>
			        </div>

			        

			        <div class="col-sm-12" style="margin-top: 10px">

			           <label  style="color: #fff">Department:</label>
			          
			            <select  class="form-control" id="select_dept">

			                <option value="0">------SELECT-------</option>
			            	  <option value="CSE">CSE</option>
      							  <option value="ME">ME</option>
      							  <option value="EECE">EECE</option>
      							  <option value="PME">PME</option>
      							  <option value="NSE">NSE</option>
      							  <option value="EWCE">EWCE</option>

			            </select>
			            <span class="error_form" id="rdept_error"></span>
			         

			        </div>


			        

			      

			        <div align="center">
			        

			          <button type="submit" id="register" class="btn btn-lg btn-primary " style="margin-top: 20px ;text-align: center; ">SignUp</button>

			        </div>

			    </form>



		  </div>

     <p><br/></p>
   


   </div>
   


  </div>
  <div class="col-md-6" style="margin-top: 150px;">
  	
  
       <h1 style="font-size: 50px;text-align: center; color: #fff"><b>WELCOME TO</b></h1>
       <h1 style="font-size: 50px;text-align: center; color: #fff"><b>MIST LITERATURE</b></h1>
       <h1 style="font-size: 60px;text-align: center; color: #fff"><b>CLUB</b></h1>


  </div>




  <!-- Modal -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #113977">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="color: #fff"></h4>
        </div>
        <div class="modal-body" id="reg_detail">
         

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  

  <!-- ************* Body part End *************-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.2.1.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>

  <script type="text/javascript">



     $("#lemail_error").hide();

     var lemail_error=false;
     var lpassword_error=false;

    $("#lemail").focusout(function(){

      check_log_email();

   });

     $("#lpassword").focusout(function(){

      check_log_password();

   });


   function check_log_email()
   {
       var pattern=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       var email=$('#lemail').val();

       lemail_error=false;

       if(pattern.test(email) && email!='')
       {
         $("#lemail_error").hide();
       }
       else if(email=='')
       {
          $("#lemail_error").html('Enter Email');
          $("#lemail_error").show();
         
          lemail_error=true;

       }
       else if(!pattern.test(email))
       {
          $("#lemail_error").html('invalid Email');
          $("#lemail_error").show();
         
          lemail_error=true;
       }
   } 


    function check_log_password()
   {
       

       var password=$('#lpassword').val();

       lpassword_error=false;

       if(password.length>0)
       {
         $("#lpassword_error").hide();
       }
       else
       {
          $("#lpassword_error").html('Enter Password');
          $("#lpassword_error").show();
        
          lpassword_error=true;
       }
   }

    
   
    $("#login").click(function(eve){


      eve.preventDefault();

      check_log_email();
      check_log_password();

      if(lemail_error==false && lpassword_error==false)
      {
          

       var email=$('#lemail').val();

       var password=$('#lpassword').val();

      

      
          $.ajax({

            url:"admin_action1.php",

            method:"POST",

            data:{ login:1,e:email, p:password },

            success:function(data){

              if(data==1)
              {
                window.location.href="admin.php";
              }
              else 
              {
                 $("#myModalLabel").html("LogIn");
                 $("#reg_detail").html('<div class="alert alert-danger" role="alert"><b> LogIn Failed </b></div>');
                 $('#myModal').modal('show');
              }
              

            }
          


          })
      }
      else
      {
        return false;
      }


    })




  	
    $("#rfirstname_error").hide();
    $("#rlastname_error").hide();
    $("#remail_error").hide();
    $("#rpassword_error").hide();
    $("#rdept_error").hide();
    $("#rdeg_error").hide();

    var firstname_error=false;
    var lastname_error=false;
    var email_error=false;
    var password_error=false;
    var dept_error=false;
    var deg_error=false;


    $("#rfirstname").focusout(function(){

      check_fname();

   });

   $("#rlastname").focusout(function(){

      check_lname();

   });

   $("#remail").focusout(function(){

      check_email();

   });

   $("#rpassword").focusout(function(){

      check_password();

   });


   $("#select_dept").focusout(function(){

      check_dept();

   });

   $("#select_deg").focusout(function(){

     check_deg();

   });


   function check_fname()
   {

       var pattern=/^[a-zA-Z]*$/;
       var fname=$('#rfirstname').val();

       firstname_error=false;

       if(pattern.test(fname) && fname!='')
       {
         $("#rfirstname_error").hide();
       }
       else if(fname=='')
       {
          $("#rfirstname_error").html('Enter your FirstName');
          $("#rfirstname_error").show();
          firstname_error=true;

       }
       else if(!pattern.test(fname))
       {
          $("#rfirstname_error").html('Should contain only characters');
          $("#rfirstname_error").show();
          firstname_error=true;
       }
   }



    function check_lname()
   {
       lastname_error=false;

       var pattern=/^[a-zA-Z]*$/;
       var lname=$('#rlastname').val();

       if(pattern.test(lname) && lname!='')
       {
         $("#rlastname_error").hide();
       }
       else if(lname=='')
       {
          $("#rlastname_error").html('Enter your LastName');
          $("#rlastname_error").show();
          lastname_error=true;

       }
       else
       {
          $("#rlastname_error").html('Should contain only characters');
          $("#rlastname_error").show();
        
          lastname_error=true;
       }
   }


    function check_password()
   {
       

       var password=$('#rpassword').val().length;
       password_error=false;

       if(password>=5)
       {
         $("#rpassword_error").hide();
       }
       else
       {
          $("#rpassword_error").html('Atleast 5 characters');
          $("#rpassword_error").show();
        
          password_error=true;
       }
   }

   


    function check_email()
   {
       var pattern=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       var email=$('#remail').val();
       email_error=false;

       if(pattern.test(email) && email!='')
       {
         $("#remail_error").hide();
       }
       else if(email=='')
       {
          $("#remail_error").html('Enter your Mail');
          $("#remail_error").show();
         
          email_error=true;

       }
       else if(!pattern.test(email))
       {
          $("#remail_error").html('invalid Email');
          $("#remail_error").show();
         
          email_error=true;
       }
   }

   function check_dept()
   {

    
       
       var dept=$('#select_dept').val();
       dept_error=false;

       if(dept!=0)
       {
         $("#rdept_error").hide();
       }
       else if(dept==0)
       {
          $("#rdept_error").html('Choose a Department');
          $("#rdept_error").show();
         
          dept_error=true;

       }
       
   }


   function check_deg()
   {

    
       
       var club=$('#select_deg').val();
       deg_error=false;

       if(club!=0)
       {
         $("#rdeg_error").hide();
       }
       else if(club==0)
       {
          $("#rdeg_error").html('Choose a Designation');
          $("#rdeg_error").show();
         
          deg_error=true;

       }
       
   }



   $("#register").click(function(eve){

   eve.preventDefault();
   debugger

   
    

   check_fname();

   check_lname();

   check_password();

   check_email();

   check_dept();

   check_deg();


   if(firstname_error==false && lastname_error==false && password_error==false && email_error==false && dept_error==false && deg_error==false )
   {

     

       var fname=$('#rfirstname').val();
   
       var lname=$('#rlastname').val();

       var email=$('#remail').val();

       var password=$('#rpassword').val();

       var dept=$('#select_dept').val(); 

       var deg=$('#select_deg').val();


        $.ajax({

        url:"admin_action1.php",

        method:"POST",

        data:{ register:1, f:fname, l:lname , e:email, p:password, d:dept, c:deg },

        success:function(data){

           $("#myModalLabel").html("SignUp");
           $("#reg_detail").html(data);
           $('#myModal').modal('show'); 

        }
      


      })

      

   }
   


  })




  </script>	

  </body>

</html>