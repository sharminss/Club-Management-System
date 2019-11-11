$(document).ready(function(){


var filePath = window.location.pathname;
var fileName = filePath.substr(filePath.lastIndexOf("/") + 1);



    $("#home").click(function(eve){

       eve.preventDefault();

       window.location.href="admin.php";

    })


 // ***************** Requestor Profile admin_action1.php ********************//

   

 $("body").delegate("#user_req","click",function(eve){

      eve.preventDefault();

      var id=$(this).attr('req_id');



      

      $.ajax({

         url:"admin_action1.php",

         method:"POST",

         data:{ user_profile:1 , id:id },

         success:function(data){

          if(fileName=="work_space.php")
          {
             $(".show_other_2").html(data);
          }
          else
          {
             $(".show_other").html(data);

          }

          

         

         }




      })



    })


  // ***************** Accept Request admin_action1.php ********************//



  $("body").delegate("#confirm","click",function(eve){

   eve.preventDefault();

   var id=$(this).attr('creq_id');

   var stt=$(this).attr('stas');

   $.ajax({
     
      url:"admin_action1.php",
      method:"POST",
      data:{ accept_req:1 , id:id , stt:stt},
      success:function(data){

        //alert(data);

         if(data='67')
         {
           $("#myModalLabel").html("Confirmation");
           $("#reg_detail").html("U have accepted request");
           $('#myModal1').modal('show'); 

         }
         else
         {
            $("#myModalLabel").html("Confirmation");
            $("#reg_detail").html("Request could not be accepted due to some problems. Please try again");
            $('#myModal1').modal('show'); 
         }

      }



   })


  })


   // ***************** Accept Request admin_action1.php ********************//


   $("body").delegate("#confirm2","click",function(eve){

   eve.preventDefault();

   var id=$(this).attr('creq_id');

   var stt=$(this).attr('stas');

   $.ajax({
     
      url:"admin_action1.php",
      method:"POST",
      data:{ accept_req:1 , id:id , stt:stt},
      success:function(data){

       // alert(data);

         if(data='67')
         {
           $("#myModalLabel").html("Confirmation");
           $("#reg_detail").html("U have accepted request");
           $('#myModal1').modal('show'); 

         }
         else
         {
            $("#myModalLabel").html("Confirmation");
            $("#reg_detail").html("Request could not be accepted due to some problems. Please try again");
            $('#myModal1').modal('show'); 
         }

      }



   })


  })


   // ***************** Delete Request admin_action1.php ********************//


   $("body").delegate("#delete","click",function(eve){

     eve.preventDefault();

     var id=$(this).attr('dreq_id');

     $("#myModalLabel_del").html("Confirmation");
     $("#reg_detail_del").html("Are u sure u don't want to accept the request?");
     $('#myModal_del').modal('show'); 

     $("#yes_del").click(function(evet){

       evet.preventDefault();

          $.ajax({
             
              url:"admin_action1.php",
              method:"POST",
              data:{ delete_req:1 , id:id },
              success:function(data){

                    $.ajax({

                         url:"admin_action2.php",

                         method:"POST",

                         data:{ prev_all_posts:1 },

                         success:function(data){


                           $(".show_other").html(data);


                       }




                      })

              }



           })




     })


   })

// ********************* My Profile  admin_action1.php  ************************//


$("#my_profile").click(function(eve){

  eve.preventDefault();


  var id=$(this).attr('my_id');

     $.ajax({

         url:"admin_action1.php",

         method:"POST",

         data:{ my_profile:1 , id:id },

         success:function(data){

           
          if(fileName=="work_space.php")
          {
             $(".show_other_2").html(data);
          }
          else
          {
             $(".show_other").html(data);

          }

         }




      })

     


})


// ********************* My Profile  admin_action1.php  ************************//


$("#my_profile2").click(function(eve){

  eve.preventDefault();


  var id=$(this).attr('my_id');

     $.ajax({

         url:"admin_action1.php",

         method:"POST",

         data:{ my_profile:1 , id:id },

         success:function(data){

            
            $(".show_other").html(data);

         }




      })

 


})



// *********************** Update My profile ***********************//



    $("#rfirstname_error_u").hide();
    $("#rlastname_error_u").hide();
    $("#remail_error_u").hide();
    $("#rpassword_error_u").hide();
    $("#rdept_error_u").hide();
    

    var firstname_error_u=false;
    var lastname_error_u=false;
    var email_error_u=false;
    var password_error_u=false;
    var dept_error_u=false;
  


     function check_fname_u()
   {

       var pattern=/^[a-zA-Z]*$/;
       var fname=$('#fn_u').val();

       firstname_error_u=false;

       if(pattern.test(fname) && fname!='')
       {
         $("#rfirstname_error_u").hide();
       }
       else if(fname=='')
       {
          $("#rfirstname_error_u").html('Enter your FirstName');
          $("#rfirstname_error_u").show();
          firstname_error_u=true;

       }
       else if(!pattern.test(fname))
       {
          $("#rfirstname_error_u").html('Should contain only characters');
          $("#rfirstname_error_u").show();
          firstname_error_u=true;
       }
   }



    function check_lname_u()
   {
       lastname_error_u=false;

       var pattern=/^[a-zA-Z]*$/;
       var lname=$('#ln_u').val();

       if(pattern.test(lname) && lname!='')
       {
         $("#rlastname_error_u").hide();
       }
       else if(lname=='')
       {
          $("#rlastname_error_u").html('Enter your LastName');
          $("#rlastname_error_u").show();
          lastname_error_u=true;

       }
       else
       {
          $("#rlastname_error_u").html('Should contain only characters');
          $("#rlastname_error_u").show();
        
          lastname_error_u=true;
       }
   }


  
   function check_dept_u()
   {

    
       
       var dept=$('#select_dept_u').val();
       dept_error_u=false;

       if(dept!=0)
       {
         $("#rdept_error_u").hide();
       }
       else if(dept==0)
       {
          $("#rdept_error_u").html('Choose a Department');
          $("#rdept_error_u").show();
         
          dept_error_u=true;

       }
       
   }



$("body").delegate("#update_my_profile","click",function(eve){

  eve.preventDefault();

  var id=$(this).attr('creq_id');
  var fn=$("#fn_u").val();
  var ln=$("#ln_u").val();

  var dep=$("#select_dept_u").val();


  check_fname_u();
  check_lname_u();

  check_dept_u();



  if(lastname_error_u==false && firstname_error_u==false )
  {

  	   $.ajax({

         url:"admin_action1.php",

         method:"POST",

         data:{ my_profile_update:1 , id:id , fn:fn, ln:ln,dep:dep },

         success:function(data){


         	  // alert(data);

             
		       $("#myModalLabel2").html("Confirmation");
	           $("#reg_detail2").html(data);
	           $('#myModal2').modal('show'); 


	           $("#close_up2").click(function(evet){

                    evet.preventDefault();
                    document.location.reload(true);



	           })
           

          


         }




      })

  	 
  }


})







// ********************* Email password change ********************//




  


$("body").delegate("#email_password","click",function(eve){

   eve.preventDefault();

   var id=$(this).attr('my_id');


     $.ajax({

         url:"admin_action1.php",

         method:"POST",

         data:{ my_profile_update_em_pass:1 , id:id },

         success:function(data){


         	  
            $(".show_other").html(data);

            
         }




      })



})



function check_password_u()
   {
       

       var password=$('#pass_u').val().length;
       password_error_u=false;

       if(password>=5)
       {
         $("#rpassword_error_u").hide();
       }
       else
       {
          $("#rpassword_error_u").html('Atleast 5 characters');
          $("#rpassword_error_u").show();
        
          password_error_u=true;
       }
   }

   


    function check_email_u()
   {
       var pattern=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       var email=$('#em_u').val();
       email_error_u=false;

       if(pattern.test(email) && email!='')
       {
         $("#remail_error_u").hide();
       }
       else if(email=='')
       {
          $("#remail_error_u").html('Enter your Mail');
          $("#remail_error_u").show();
         
          email_error_u=true;

       }
       else if(!pattern.test(email))
       {
          $("#remail_error_u").html('invalid Email');
          $("#remail_error_u").show();
         
          email_error_u=true;
       }
   }


$("body").delegate("#update_my_Email_Password","click",function(eve){

  eve.preventDefault();

   var id=$(this).attr('creq_id');
   var em=$("#em_u").val();
   var pass=$("#pass_u").val();

   check_email_u();
   check_password_u();

   if(email_error_u==false && password_error_u==false )
   {

   	    $.ajax({

	         url:"admin_action1.php",

	         method:"POST",

	         data:{ my_profile_update_em_pass_done:1 , id:id , em:em, pass:pass},

	         success:function(data){


             $("#myModalLabel2").html("Confirmation");
	           $("#reg_detail2").html(data);
	           $('#myModal2').modal('show'); 


         }




      })

   }




})



//************************** Show President Group ***********************//

$("#group_show_pres").click(function(eve){

   eve.preventDefault();

    $.ajax({

	         url:"admin_action1.php",

	         method:"POST",

	         data:{ groups_president:1 },

	         success:function(data){


             $(".show_other").html(data);


         }




      })



})



// ************************** Back To Previous Page President*******************//

$("body").delegate("#prev_page_pres_back","click",function(eve){

  eve.preventDefault();

      $.ajax({

           url:"admin_action1.php",

           method:"POST",

           data:{ groups_president:1 },

           success:function(data){


             $(".show_other").html(data);


         }




      })



})




// ****************** Previous Presidents ******************//


$("body").delegate("#prev_pres_show","click",function(eve){

  eve.preventDefault();

   $.ajax({

           url:"admin_action1.php",

           method:"POST",

           data:{ prev_pp:1 },

           success:function(data){


             $(".show_other").html(data);


         }




      })


})



//************************** Show Vice President Group ***********************//

$("#group_show_vice_pres").click(function(eve){

   eve.preventDefault();



    $.ajax({

           url:"admin_action1.php",

           method:"POST",

           data:{ groups_vice_president:1 },

           success:function(data){


             $(".show_other").html(data);


         }




      })



})



//************************** Show Club Coordinator Group ***********************//

$("#group_show_club_coord").click(function(eve){

   eve.preventDefault();



    $.ajax({

           url:"admin_action1.php",

           method:"POST",

           data:{ groups_club_coordinator:1 },

           success:function(data){


             $(".show_other").html(data);


         }




      })



})




//************************** Show Member Group ***********************//

$("#group_show_member").click(function(eve){

   eve.preventDefault();

    $.ajax({

           url:"admin_action1.php",

           method:"POST",

           data:{ groups_member:1 },

           success:function(data){


             $(".show_other").html(data);


         }




      })



})




// ******************* Disable Vice precident *************************//

$("body").delegate(".dis_vice","click",function(eve){

  eve.preventDefault();

  var id=$(this).attr('dis_v');
  
     $("#myModalLabel_del").html("Confirmation");
     $("#reg_detail_del").html("Are u sure u want to disable Vice President?");
     $('#myModal_del').modal('show'); 

     $("#yes_del").click(function(evet){

       evet.preventDefault();


     $.ajax({

	         url:"admin_action1.php",

	         method:"POST",

	         data:{ vice_pre:1, id:id },

	         success:function(data){


              if(data=='67')
              {

              	  $.ajax({

				         url:"admin_action1.php",

				         method:"POST",

				         data:{ groups_vice_president:1 },

				         success:function(data){


			             $(".show_other").html(data);


			         }




			      })



              }


         }


      })

   })




})


// ****************** Previous vice presidents ******************//


$("body").delegate("#prev_vice_pres","click",function(eve){

  eve.preventDefault();

   $.ajax({

	         url:"admin_action1.php",

	         method:"POST",

	         data:{ prev_vice:1 },

	         success:function(data){


             $(".show_other").html(data);


         }




      })


})






// ************************** Back from Previous Vice President *******************//

$("body").delegate("#prev_vice_pres_back","click",function(eve){

  eve.preventDefault();

   $.ajax({

           url:"admin_action1.php",

           method:"POST",

           data:{ groups_vice_president:1 },

           success:function(data){


             $(".show_other").html(data);


         }




      })



})



// ************************** Back To Previous Club Coordinator *******************//

$("body").delegate("#prev_club_coordinator","click",function(eve){

  eve.preventDefault();

   $.ajax({

           url:"admin_action1.php",

           method:"POST",

           data:{ groups_club_coordinator:1 },

           success:function(data){


             $(".show_other").html(data);


         }




      })



})




// ************************** Back To Previous Page *******************//

$("body").delegate("#prev_member_back","click",function(eve){

  eve.preventDefault();

   $.ajax({

	         url:"admin_action1.php",

	         method:"POST",

	         data:{ groups_member:1 },

	         success:function(data){


             $(".show_other").html(data);


         }




      })



})




// ******************* Disable Club Coordinator *************************//

$("body").delegate(".dis_cc","click",function(eve){

  eve.preventDefault();

  var id=$(this).attr('dis_c');
  
     $("#myModalLabel_del").html("Confirmation");
     $("#reg_detail_del").html("Are u sure u want to disable Club Coordinator?");
     $('#myModal_del').modal('show'); 

     $("#yes_del").click(function(evet){

       evet.preventDefault();


     $.ajax({

	         url:"admin_action1.php",

	         method:"POST",

	         data:{ cc:1, id:id },

	         success:function(data){


              if(data=='67')
              {

              	  $.ajax({

				         url:"admin_action1.php",

				         method:"POST",

				         data:{ groups_club_coordinator:1 },

				         success:function(data){


			             $(".show_other").html(data);


			         }




			      })



              }


         }


      })

   })




})




// ****************** Previous Club Coordinators ******************//


$("body").delegate("#prev_cc_show","click",function(eve){

  eve.preventDefault();

   $.ajax({

	         url:"admin_action1.php",

	         method:"POST",

	         data:{ prev_ccs:1 },

	         success:function(data){


             $(".show_other").html(data);


         }




      })


})



// ******************* Disable Member *************************//

$("body").delegate(".dis_m","click",function(eve){

  eve.preventDefault();

  var id=$(this).attr('dis_m');
  
     $("#myModalLabel_del").html("Confirmation");
     $("#reg_detail_del").html("Are u sure u want to disable Club Coordinator?");
     $('#myModal_del').modal('show'); 

     $("#yes_del").click(function(evet){

       evet.preventDefault();


     $.ajax({

	         url:"admin_action1.php",

	         method:"POST",

	         data:{ mm:1, id:id },

	         success:function(data){


              if(data=='67')
              {

                  	 $.ajax({

    				         url:"admin_action1.php",

    				         method:"POST",

    				         data:{ groups_member:1 },

    				         success:function(data){


    			             $(".show_other").html(data);


    			         }




    			      })



              }


         }


      })

   })




})




// ****************** Previous Members ******************//


$("body").delegate("#prev_mm","click",function(eve){

  eve.preventDefault();

   $.ajax({

	         url:"admin_action1.php",

	         method:"POST",

	         data:{ prev_mm:1 },

	         success:function(data){


             $(".show_other").html(data);


         }




      })


})






})