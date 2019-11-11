<?php

mysql_connect("localhost","root","");

mysql_select_db("literatute_club");

session_start();

/*if(session_status() == PHP_SESSION_ACTIVE)
{
	$id=$_SESSION['id'];
}
*/
                  


$directoryURI =basename($_SERVER['SCRIPT_NAME']);




?>


<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Literature Club</title>

    <!--Css Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">



    <style>

      /* jssor slider loading skin spin css */
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }


        .jssora061 {display:block;position:absolute;cursor:pointer;}
        .jssora061 .a {fill:none;stroke:#fff;stroke-width:360;stroke-linecap:round;}
        .jssora061:hover {opacity:.8;}
        .jssora061.jssora061dn {opacity:.5;}
        .jssora061.jssora061ds {opacity:.3;pointer-events:none;}


       
    </style>
 
   
  </head>

  <body>
  
 <!-- Navbar Starts--> 
 

  <div class="wrap-header">
  	
  	<div class="wrap">

	  	<div class="header">

	  		<div class="header-left-side">
	  		
		  		<ul class="nav">
		  			
		  			<li class="left_"><a class="left_a " href="#">Home</a></li>
		            <li class="left_" ><a class="left_a notice_click_navbar" href="#">Notice</a></li>
		  			
		  		
	                  
	                  <?php

	                  	mysql_select_db("literatute_club");

                         $q="SELECT * FROM event_link";

						    $data=mysql_query($q);

						   if(mysql_num_rows($data)>0)
						   {
						      

						      while ($row=mysql_fetch_assoc($data)) {
						        # code...
						         echo '<li class=" left_" ><a class="left_a" target="_blank" href="'.$row['link'].'">'.$row['ename'].'</a></li>';

						      }
						   }
						  

	                  	?>
					    
					

		  		</ul>

		   	</div>	

		   	<a href="/" class="logo" title="MIST LITERATURE CLUB">

                <img src="logo/aunkur_logo.png" height="130" width="190" alt="MIST LITERATURE CLUB">

            </a>

		   	<div class="header-right-side">

		  		<ul class="nav">
		  			
		  		
		  		    <li class="right_"><a class="right_a" href="#">Hall of Fame</a></li>
		  		    <li class="right_ dropdown-toggle" id="dropdownMenu3" data-toggle="dropdown"><a class="right_a" href="javascript:void(0)">Previous Events<span class="caret" style="margin-bottom: 5px;"></span></a></li>
                    
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3" style="margin-top: -50px; margin-left: 670px;" >
                    	
                        <?php

	                  	mysql_select_db("literatute_club");

                         $q="SELECT * FROM prev_events";

						    $data=mysql_query($q);

						   if(mysql_num_rows($data)>0)
						   {
						      

						      while ($row=mysql_fetch_assoc($data)) {
						        # code...
						         echo "<li><a href='$row[link]' target='_blank'>$row[ename]</a></li>";

						      }
						   }
						   else
						   {
						   	     echo "<li><a href='#'>No Event</a></li>";
						   }


	                  	?>



                    </ul>
                     

		  		    <li class="right_"><a class="right_a" href="#">Contact</a></li>
		  			


		  		</ul>

	  	   </div>


	  	</div>

  	</div>


  </div>	


 <!-- Navbar Ends--> 
 <!-- Navbar Slider starts--> 

  <div class="box-banner">

	  <div class="col-md-3 club" >
	  	
	  	<p style="font-family: 'Lato';color: #fff;text-align: center;font-size: 40px;margin-top: 110px">MIST Literature </p>
	  	<p style="font-family: 'Lato';color: #fff;text-align: center;font-size: 40px;margin-top: 0px"> & </p>
	  	<p style="font-family: 'Lato';color: #fff;text-align: center;font-size: 40px;margin-top: 0px">Cultural Club</p>
	 
	  </div>


	  <div class="col-md-9 club_pics ">

       
       <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:930px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="../svg/loading/static-svg/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="images/mist.jpg" />
                <div data-u="thumb">MIST Plaza</div>
            </div>
            <div>
                <img data-u="image" src="images/mist2.jpg" />
                <div data-u="thumb">MIST Office</div>
            </div>
            <div>
                <img data-u="image" src="images/mist3.png" />
                <div data-u="thumb">Achievements</div>
            </div>
            <div>
                <img data-u="image" src="images/mist4.jpg" />
                <div data-u="thumb">Multipurpose hall</div>
            </div>
            <div>
                <img data-u="image" src="images/mist5.jpg" />
                <div data-u="thumb">MIST Central Library</div>
            </div>
           

        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" style="position:absolute;bottom:0px;left:0px;width:980px;height:50px;color:#FFF;overflow:hidden;cursor:default;background-color:rgba(0,0,0,.5);">
            <div data-u="slides">
                <div data-u="prototype" style="position:absolute;top:0;left:0;width:980px;height:50px;">
                    <div data-u="thumbnailtemplate" style="position:absolute;top:0;left:0;width:100%;height:100%;font-family:verdana;font-weight:normal;line-height:50px;font-size:16px;padding-left:10px;box-sizing:border-box;"></div>
                </div>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora061" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M11949,1919L5964.9,7771.7c-127.9,125.5-127.9,329.1,0,454.9L11949,14079"></path>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora061" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <path class="a" d="M5869,1919l5984.1,5852.7c127.9,125.5,127.9,329.1,0,454.9L5869,14079"></path>
            </svg>
        </div>
    </div>
    
    <!-- #endregion Jssor Slider End -->
      



	  </div>

	   

  </div>




  </div>

 <!-- Navbar Slider ends--> 

<!-- ***************** notice *****************-->

<?php


	function readMoreFunction($story_desc) {  
	//Number of characters to show  

	$chars = 200;  
	$story_desc = substr($story_desc,0,$chars);  
	$story_desc = substr($story_desc,0,strrpos($story_desc,' '));  
	 
	return $story_desc;  

	} 

?>

 <!-- Body part starts --> 

    <!-- About part --> 

	  <div class="col-md-12" style="background-image:url('images/2281.jpg');padding:15px;">
	  	
	       

		   <div class="col-md-8" id="About_show">
		   	


		   </div>

		   <div class="col-md-4" id="breaking_news" style="">

              <p style="color: #000;text-align: center;font-size: 28px;margin-top:40px;">Breaking News</p>

		   	
            <!-- Bootstrap Carousel Starts -->


               <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-top: 25px;">
				  <!-- Indicators -->

				    <ol class="carousel-indicators">

	                  <?php

	                    
	                     $qb="SELECT * FROM breaking";

	                     $datab=mysql_query($qb);

	                     $n=mysql_num_rows($datab);

	                     //echo $n;




	                     for ($i=0; $i<$n ; $i++) { 
	                     	# code...

	                     	$nn=$i;

                            //echo $nn;  

                            if($nn==0)
                            {

                            	echo '
                                    
                                      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>

                            	';

                            }
                            else
                            {
                            	echo '
                                  
                                
				                       <li data-target="#carousel-example-generic" data-slide-to="'.$nn.'"></li>


                            	';
                            }

	                     }


	                  ?>

				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">


                   <?php

                         $qb="SELECT * FROM breaking";

	                     $datab=mysql_query($qb);


				  	$j=0; 

                     while ($rowb=mysql_fetch_assoc($datab)) {
                     	# code...

                     	$head=$rowb['head'];

                     	$des=nl2br($rowb['bdesc']);

                     	$ln=$rowb['linkname'];

                     	$l=$rowb['link'];

                        $idn=$rowb['id'];

                     	if($j==0)
                     	{
                           echo '


                                <div class="item active">

							      <img src="images/pexels-photo-268415.jpeg" alt="Wall">

							       <div class="carousel-caption">
							        <p style="margin-top: -210px;text-align: center justify;text-justify: inter-word;font-size: 18px;color: #000;"><b>'.$head.'</b></p>

							         <p style="margin-top: 5px;text-align: justify;text-justify: inter-word;color: #000;">'.readMoreFunction($des).'<b>.....
                                        
                                        <p>

                                          <a href="#" class="notice_user" notice_id="'.$idn.'" style="float:left;color: #470b0f;text-align: justify;text-justify: inter-word;"><b>Read More</b></a>

                                        <p>


							         </b></p>



                                     

                                     </br>



							         ';


							         if($ln!='')
							         {
                                        
                                        echo '<p style="margin-top:3px;"><a href="'.$ln.'" target="_blank" style="color: #470b0f" ><b>'.$l.'</b></a></p>';
							         }



							
			                       

							echo        '</div>
							     
							    </div>



                           ';
                     	}
                     	else
                     	{
                            echo '
                               
                                <div class="item">

							      <img src="images/pexels-photo-268415.jpeg" alt="Wall">

							       <div class="carousel-caption">
							        <p style="margin-top: -210px;text-align: center justify;text-justify: inter-word;font-size: 18px;color: #000;"><b>'.$head.'</b></p>

							         <p style="margin-top: 5px;text-align: justify;text-justify: inter-word;color: #000;">'.readMoreFunction($des).'<b>.....

                                        <p style=""><a href="#" class="notice_user" notice_id="'.$idn.'" style="float:left;color: #470b0f;text-align: justify;text-justify: inter-word; "><b>Read More</b></a><p>

							         </b></p>

                                     </br>

							         ';

							        if($ln!='')
							         {
                                        
                                        echo '<p style="margin-top:3px;"><a href="'.$ln.'" target="_blank" style="color: #000;" ><b>'.$l.'</b></a></p>';
							         }
			                       

							echo       '</div>
							     
							    </div>


                            ';
                     	}


                     	$j=$j+1;


                     }



				  	?>

				  	

				    

				    

				  
				   
				  </div>

				  <!-- Controls -->
				  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
               </div>


     
            <!-- Bootstrap Carousel Ends -->

		   </div>


	  </div>
   
      <p></br></p>
      <p></br></p>
      <p></br></p>

 <!-- Body part ends--> 


   <?php include 'common_footer.php';?>



  <!-- Modal  -->

  <div class="modal fade" id="myModal_cover" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: blue">
          <button type="button" class="close" data-dismiss="modal"  id="" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="color: #fff;text-align: center;">Breaking News</h4>
        </div>
        <div class="modal-body" id="up_cov" >
         
          

        </div>
        <div class="modal-footer">
        
          <button type="button" class="btn btn-danger" id="modal_up_cv_no" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>






  <!-- ************* Body part End *************-->

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.2.1.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jssor.slider.min.js"></script>
  <script src="js/website_content.js"></script>



  <script type="text/javascript">
  	
          jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $Orientation: 2,
                $NoDrag: true
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };

   jssor_1_slider_init();


  </script>
  </body>

  </html>