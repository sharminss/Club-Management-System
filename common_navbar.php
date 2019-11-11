<nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: #337AB7">

	    <div class="navbar-header">
	      <a class="navbar-brand" href="#" style="color: #fff"><b>MIST LITERATURE CLUB</b></a>
	    </div>

	  <ul class="nav navbar-nav navbar-right" style="margin-right: 9px;">


      <!-- ************* User Account *************-->


        <li><a href="javascript:void(0)" style="color: #fff" id="my_profile" my_id="<?php echo $_SESSION['id']; ?>"> <span class="glyphicon glyphicon-user" aria-hidden="true" style="margin-right: 3px;"></span>HI 



            <?php 

             $q3="select firstname from register_user where id=".$_SESSION['id']."";

             if($res3=mysql_query($q3))
             {
                $row3=mysql_fetch_assoc($res3);

                echo strtoupper($row3['firstname']);
             }


             



          ?></a></li>



      <!-- ************* Home Start *************-->


       <?php

           

           if($_SESSION['st']==1000 || $_SESSION['st']==1  || $_SESSION['st']==2 || $_SESSION['st']==3 || $_SESSION['st']==4 || $_SESSION['st']==5 || $_SESSION['st']==6)
           {

               
                     echo '

                     <li><a href="javascript:void(0)" style="color: #fff" id="home"> <span class="glyphicon glyphicon-home" aria-hidden="true" style="margin-right: 3px;"></span>HOME</a></li>


                       ';


            }
            

        ?>           


        <!-- *************Admin User Request Start *************-->


        
        <?php

           

           if($_SESSION['st']==1)
           {

               
                     echo '

                       <li class="dropdown">

                         <a href="javascript:void(0)" style="color: #fff" id="notify"  class="dropdown-toggle" data-toggle="dropdown" role="button"> <span class="glyphicon glyphicon-th-list" aria-hidden="true" style="margin-right: 3px;"></span>REQUESTS<span class="badge count"></span></a>

                              <ul class="dropdown-menu dm">

                      
                     


                              </ul>



                       </li>

                     ';
                  
                 
               

             }


        ?>


        <?php

           

           if($_SESSION['st']==1000)
           {

               
                     echo '

                       <li class="dropdown">

                         <a href="javascript:void(0)" style="color: #fff" id="notify1"  class="dropdown-toggle" data-toggle="dropdown" role="button"> <span class="glyphicon glyphicon-th-list" aria-hidden="true" style="margin-right: 3px;"></span>REQUESTS<span class="badge count1"></span></a>

                              <ul class="dropdown-menu dm1">

                      
                     


                              </ul>



                       </li>

                     ';
                  
                 
               

             }


        ?>

      


        <!-- ************* Log out Start *************-->


        <li id="log_out"><a href="javascript:void(0)" style="color: #fff"> <span class="glyphicon glyphicon-off" aria-hidden="true" style="margin-right: 3px;"></span>LOG OUT</a></li>
        
      </ul>
  
    </nav>
