$(document).ready(function(){



var filePath = window.location.pathname;
var fileName = filePath.substr(filePath.lastIndexOf("/") + 1);


  $.ajax({

    url:"website_content1.php",
    method:"POST",
    data:{about_show:1},
    success:function(data){

      $("#About_show").html(data);

    }


  })


  $(".notice_user").click(function(eve){

    eve.preventDefault();

    var id=$(this).attr('notice_id');

    $.ajax({

        url:"website_content1.php",
	    method:"POST",
	    data:{notice_show:1,id:id},

	    success:function(data){

	      $("#up_cov").html(data);
	      $('#myModal_cover').modal('show');

	    }


    })



  })


 $(".notice_click_navbar").click(function(eve){

  eve.preventDefault();


  window.location.href="website_notice_show.php";


 })


 $(".home_click_navbar").click(function(eve){

  eve.preventDefault();

 
  window.location.href="website_show.php";


 })



 // ************ Notice & information_show2.php ***************//


          $.ajax({
                

                  url:"website_content1.php",

                  method:"POST",

                  data:{ notice_show_total:1 },

                  success:function(data){

                 // 	alert(data);

                      $("#notice_content").html(data);

                  }

  	       })


     $("body").delegate(".show_total_notice_user","click",function(eve)
     {
     	eve.preventDefault();

     	var id=$(this).attr('evt_notice_id');
        
      //  alert(id);


         




          $.ajax({
                

                  url:"website_content1.php",

                  method:"POST",

                  data:{ notice_show_detail:1 ,iid:id},

                  success:function(data){

                  //	alert(data);

                      
                     
                         $("#total_notice_show").html(data);
                         $('#myModal_notice_show').modal('show'); 
                    

                     

                  }

  	   })

     })

      


})