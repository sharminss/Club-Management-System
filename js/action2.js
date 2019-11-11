$(document).ready(function(){


var filePath = window.location.pathname;
var fileName = filePath.substr(filePath.lastIndexOf("/") + 1);



 // ******************* Disable President *************************//



$("body").delegate(".dis_pres","click",function(eve){

  eve.preventDefault();

  var id=$(this).attr('dis_pres');
  
     $("#myModalLabel_del").html("Confirmation");
     $("#reg_detail_del").html("Are u sure u want to disable Club Coordinator?");
     $('#myModal_del').modal('show'); 

     $("#yes_del").click(function(evet){

       evet.preventDefault();


     $.ajax({

           url:"admin_action2.php",

           method:"POST",

           data:{ pres_dis:1, id:id },

           success:function(data){


              if(data=='67')
              {

                  $.ajax({

                   url:"admin_action1.php",

                   method:"POST",

                   data:{ groups_president:1 },

                   success:function(data){


                     $(".show_other").html(data);


                 }




            })



              }


         }


      })

   })




})


// ********************** Go To Work Space **************************//


$("#work_space").click(function(eve){

  eve.preventDefault();

   window.location.href="work_space.php";


})


// ******************* Create New Post *******************//


$("#write_post").click(function(eve){

  eve.preventDefault();

      $.ajax({

         url:"admin_action2.php",

         method:"POST",

         data:{ create_post:1 },

         success:function(data){

              
                 $(".show_other").html(data);

             
         

         }

     })

  })


  // ********************* Post Create ******************//



  $("#pay_error").hide();

  $("#pay_des_error").hide();



    var pay_md=false;
    var pay_desc=false;


    function payment_medium_19()
    {
        pay_md=false;

      if(!$("#payment_medium").val())
      {
        $("#pay_error").html('Enter Post Topic');
        $("#pay_error").show();
        pay_md=true;
      }
      else
      {
        $("#pay_error").hide();

        
      }

    }



    function payment_medium_desc_19()
    {
       pay_desc=false;

      if(!$("#payment_process").val())
      {
        $("#pay_des_error").html('Enter Post Detail');
        $("#pay_des_error").show();
        pay_desc=true;
      }
      else
      {
        $("#pay_des_error").hide();

        
      }
    }
   


  $("body").delegate("#save_payment_process","click",function(eve){

      eve.preventDefault();


     var id=$(this).attr('evt_id');

     var md=$("#payment_medium").val();

     var pr=$("#payment_process").val();



     payment_medium_19();
     payment_medium_desc_19();


       if(pay_desc==false && pay_md==false)
       {
          //alert(88);


          $.ajax({

                  url:"admin_action2.php",

                  method:"POST",

                  data:{ payment_prc_add:1 , iid:id, head:md , descc:pr  },

                  success:function(data){


                    //alert(data);

                     

                              if(data==4)
                              {
                                 $("#myModalLabel2").html("Confirmation");
                                 $("#reg_detail2").html("Post Created successfully");
                                 $('#myModal2').modal('show');



                                  $.ajax({

                                       url:"admin_action2.php",

                                       method:"POST",

                                       data:{ create_post:1 },

                                       success:function(data){

                                            
                                          $(".show_other").html(data);

                                           
                                       

                                       }

                                   })



                  
 



                              }
                              
                    
                      }


              })

      }


  })


  
// ****************** Post Update ******************//


$("body").delegate("#update_post","click",function(eve){

  eve.preventDefault();

  var id=$(this).attr('post_id');

  

   $.ajax({

           url:"admin_action2.php",

           method:"POST",

           data:{ post_update:1 , id:id },

           success:function(data){


              $("#post_title").html("Confirmation");
              $("#post_edit_body").html(data);
              $('#myModal_edit_session').modal('show'); 


         }




      })


})







// ****************** Edit Post Done *********************** //



  $("#event_error_edit_pay_medium").hide();

  $("#event_error_edit_pay_proc_desc").hide();



    var pay_md_edit_79=false;
    var pay_desc_edit_79=false;


    function payment_medium_edit_79()
    {
        pay_md_edit_79=false;

      if(!$(".medium_edit_head_99").val())
      {
        $("#event_error_edit_pay_medium").html('Enter Post Topic');
        $("#event_error_edit_pay_medium").show();
        pay_md_edit_79=true;
      }
      else
      {
        $("#event_error_edit_pay_medium").hide();

        
      }

    }



    function payment_medium_edit_desc_79()
    {
       pay_desc_edit_79=false;

      if(!$(".process_edit_rul_99").val())
      {
        $("#event_error_edit_pay_proc_desc").html('Enter Post Description');
        $("#event_error_edit_pay_proc_desc").show();
        pay_desc_edit_79=true;
      }
      else
      {
        $("#event_error_edit_pay_proc_desc").hide();

        
      }
    }
   


$("body").delegate("#save_post_edit","click",function(eve){


   eve.preventDefault();

   var id=$("#edit_post_id").val();

 


    eve_hd=$(".medium_edit_head_99").val();

    eve_ds=$(".process_edit_rul_99").val();



  

  


  
    payment_medium_edit_79();
    payment_medium_edit_desc_79();

   
   
   


    if(pay_desc_edit_79==false && pay_md_edit_79==false )
    {

       // alert(44);


          $.ajax({

                url:"admin_action2.php",

                method:"POST",

              
                data:{ edit_post_done_:1 ,id:id, hd:eve_hd, ds:eve_ds},

                success:function(data){


                       $('#myModal_edit_session').modal('hide');

                        

                        if(data=='4')
                        {

                             $.ajax({

                               url:"admin_action2.php",

                               method:"POST",

                               data:{ create_post:1 },

                               success:function(data){

                                    
                                       $(".show_other").html(data);

                                   
                               

                               }

                           })

                        }

                       

                   
                    }


            })
      }


})


 
// ****************** Delete Post ******************//


$("body").delegate("#delete_post","click",function(eve){

  eve.preventDefault();

  var id=$(this).attr('post_id');



     $("#myModalLabel_del").html("Confirmation");
     $("#reg_detail_del").html("Are u sure u want to delete the post?");
     $('#myModal_del').modal('show'); 

     $("#yes_del").click(function(evet){

       evet.preventDefault();


     $.ajax({

           url:"admin_action2.php",

           method:"POST",

           data:{ post_delete:1, id:id },

           success:function(data){

           // alert(data);


                  if(data=='4')
                  {

                          $.ajax({

                               url:"admin_action2.php",

                               method:"POST",

                               data:{ create_post:1 },

                               success:function(data){

                                    
                                  $(".show_other").html(data);

                                   
                               

                               }

                           })



                  }


         }


      })

  

   


})



})


})