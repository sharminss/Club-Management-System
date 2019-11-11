<!-- ************* Work Space *************-->

  	<ul class="nav nav-pills nav-stacked" style=" margin-top: 70px;">


      <?php

         if($_SESSION['st']==1000 || $_SESSION['st']==1 || $_SESSION['st']==2 || $_SESSION['st']==3 || $_SESSION['st']==4 || $_SESSION['st']==5 )
         {

            echo '

                 <li class="active" ><a id="work_space" href="javascript:void(0)" style="font-size: 15px;padding: 14px; text-align: center; color: #fff" > <span class="glyphicon glyphicon-cog" style="margin-right: 10px" aria-hidden="true"></span>Work Space</a></li>


            ';
         }



      ?>
          
          
          
       

    </ul>



    <!-- ************* My Profile View *************-->

    <ul class="nav nav-pills nav-stacked" style="margin-top: 20px;">


      
        <li class="active" ><a  id="my_profile2" my_id="<?php echo $_SESSION['id'] ?>" href="javascript:void(0)" style="font-size: 15px;padding: 14px; text-align: center; color: #fff" > <span class="glyphicon glyphicon-user"  style="margin-right: 10px" aria-hidden="true"></span>My Profile</a></li>


    </ul>


     <!-- ************* Change Email password View *************-->

    <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">


      <?php

         if( $_SESSION['st']==1000 || $_SESSION['st']==1 || $_SESSION['st']==2 || $_SESSION['st']==3 || $_SESSION['st']==4  || $_SESSION['st']==5 || $_SESSION['st']==6)
         {

            echo '

                 <li class="active" ><a id="email_password" my_id="'.$id.'" href="javascript:void(0)" style="font-size: 15px;padding: 14px; text-align: center; color: #fff" > <span class="glyphicon glyphicon-pencil" style="margin-right: 10px" aria-hidden="true"></span>Edit Email Password</a></li>


            ';
         }



      ?>
          
          
          
       

    </ul>


     <!-- ************* Write Post *************-->

    <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">


      <?php

         if( $_SESSION['st']==1000 || $_SESSION['st']==1 || $_SESSION['st']==2 || $_SESSION['st']==3 || $_SESSION['st']==4  || $_SESSION['st']==5 || $_SESSION['st']==6)
         {

            echo '

                 <li class="active" ><a id="write_post" my_id="'.$id.'" href="javascript:void(0)" style="font-size: 15px;padding: 14px; text-align: center; color: #fff" > <span class="glyphicon glyphicon-pencil" style="margin-right: 10px" aria-hidden="true"></span>Write Post</a></li>


            ';
         }



      ?>
          
          
          
       

    </ul>


     <!-- ************* Group President View *************-->

    <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">


      <?php

         if($_SESSION['st']==1000 || $_SESSION['st']==1 || $_SESSION['st']==2 || $_SESSION['st']==3 || $_SESSION['st']==4 || $_SESSION['st']==5 || $_SESSION['st']==6 )
         {

            echo '

                 <li class="active" ><a id="group_show_pres" href="javascript:void(0)" style="font-size: 15px;padding: 14px; text-align: center; color: #fff" > <img src="logo/baseline_group_white_18dp.png" style="margin-right:5px;"/>President </a></li>


            ';
         }



      ?>
          
          
          
       

    </ul>


     <!-- ************* Group Vice President View *************-->

    <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">


      <?php

         if($_SESSION['st']==1000 || $_SESSION['st']==1 || $_SESSION['st']==2 || $_SESSION['st']==3 || $_SESSION['st']==4 || $_SESSION['st']==5 || $_SESSION['st']==6 )
         {

            echo '

                 <li class="active" ><a id="group_show_vice_pres" href="javascript:void(0)" style="font-size: 15px;padding: 14px; text-align: center; color: #fff" > <img src="logo/baseline_group_white_18dp.png" style="margin-right:5px;"/>Vice President</a></li>


            ';
         }



      ?>
          
          
          
       

    </ul>


     <!-- ************* Group Club Coordinator View *************-->

    <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">


      <?php

         if($_SESSION['st']==1000 || $_SESSION['st']==1 || $_SESSION['st']==2 || $_SESSION['st']==3 || $_SESSION['st']==4 || $_SESSION['st']==5 || $_SESSION['st']==6 )
         {

            echo '

                 <li class="active" ><a id="group_show_club_coord" href="javascript:void(0)" style="font-size: 15px;padding: 14px; text-align: center; color: #fff" > <img src="logo/baseline_group_white_18dp.png" style="margin-right:5px;"/>Club Coordinator</a></li>


            ';
         }



      ?>
          
          
          
       

    </ul>



     <!-- ************* Group Member View *************-->

    <ul class="nav nav-pills nav-stacked" style=" margin-top: 20px;">


      <?php

         if($_SESSION['st']==1000 || $_SESSION['st']==1 || $_SESSION['st']==2 || $_SESSION['st']==3 || $_SESSION['st']==4 || $_SESSION['st']==5 || $_SESSION['st']==6 )
         {

            echo '

                 <li class="active" ><a id="group_show_member" href="javascript:void(0)" style="font-size: 15px;padding: 14px; text-align: center; color: #fff" > <img src="logo/baseline_group_white_18dp.png" style="margin-right:5px;"/>Member</a></li>


            ';
         }



      ?>
          
          
          
       

    </ul>


   



   



