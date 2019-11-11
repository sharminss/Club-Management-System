<?php

mysql_connect("localhost","root","");

mysql_select_db("literatute_club");

session_start();
                  
             



//-------------- Registration -----------------//


if(isset($_POST['register']))
{
  $f=$_POST['f'];
  $l=$_POST['l'];
  $e=$_POST['e'];
  $p=$_POST['p'];
  $d=$_POST['d'];
  $c=$_POST['c'];


  $s="'".$e."'";


  



   $query='SELECT * FROM register_user WHERE email='.$s.'';



   $data=mysql_query($query);



    $n=mysql_num_rows($data);

    if($n>0)
    {
      echo '<div class="alert alert-danger" role="alert"><b> User Already exists </b></div>';
    }
    else
    {
        $query2="INSERT INTO register_user(firstname,lastname,email,password,dept,deg,status) VALUES('$f','$l','$e','$p','$d',$c,0)";
         
      //  echo $query2; 
         

        if(mysql_query($query2))
        {
          echo '<div class="alert alert-success" role="alert"><b>Registration is done successfully</b></div>';
        }
        else
        {
           echo '<div class="alert alert-success" role="alert"><b>Registration Failed</b></div>';
        }

    }

  



}




//-------------- LogIn-----------------//


if(isset($_POST['login']))
{
  $email=$_POST['e'];
  $password=$_POST['p'];

   $s="'".$email."'";
   $p="'".$password."'";


  $query='SELECT * FROM register_user WHERE email='.$s.' AND password='.$p.'';

  if($res=mysql_query($query))
  {
      if(mysql_num_rows($res)==1)
      { 
          $row=mysql_fetch_assoc($res);

          $fm=$row['firstname'];
          $id=$row['id'];
          $status=$row['status'];
          $em=$row['email'];


          $_SESSION['id']=$id;
          $_SESSION['fm']=$fm;
          $_SESSION['ln']=$row['lastname'];
          $_SESSION['st']=$status;
          $_SESSION['em']=$em;
          $_SESSION['ds']=$row['deg'];

          echo '1';
      }
     else
     {
         echo '67';
     }
   }
   else
   {
         echo '90';
    }

 


}




//-------------- LogOut-----------------//


if(isset($_POST['logout']))
{
   

    unset($_SESSION['id']);
   

    unset($_SESSION['fm']);
   

    unset($_SESSION['em']);
  

    unset($_SESSION['st']);


    unset($_SESSION['ln']);
  

    unset( $_SESSION['ds']);
    

    echo '34';
}




//---------------Admin Request----------//

if(isset($_POST['view']))
{
   $query="SELECT * FROM register_user WHERE status=0";

   $output='';

   $res=mysql_query($query);

   $n=0;

   if(mysql_num_rows($res)>0)
   {
     while($row=mysql_fetch_assoc($res))
     {

        if($row['deg']!=1){

          $n++;

          $output .= '


        
             
             <li>

               

                 <a class="dropdown-item" href="#"  >

                    

                     
                       <strong style="margin-right:50px;"  req_id='.$row["id"].' id="user_req">'.$row["firstname"].'   '.$row["lastname"].'</strong>


                   
                        <button style="margin-left:40px" id="confirm" class="btn btn-primary" stas="'.$row["deg"].'" creq_id='.$row["id"].' >Confirm</button><button style="margin-left:10px" id="delete" class="btn btn-danger" dreq_id='.$row["id"].' >Delete</button>




              

                 </a>


              


             </li>


        

        ';
      }

     }
   }
   if($n==0)
   {
     $output= '<strong style="padding:10px;">No request Found</strong>';
   }



   
  


   $data=array(

      'request' => $output,
      'count'=>$n

   );

 echo json_encode($data);

}





//---------------Super Admin Request----------//

if(isset($_POST['view1']))
{
   $query="SELECT * FROM register_user WHERE status=0";

   $output='';

   $res=mysql_query($query);

   $n=0;

   if(mysql_num_rows($res)>0)
   {
     while($row=mysql_fetch_assoc($res))
     {
       

        $n++;

        $output .= '


        
             
             <li>

               

                 <a class="dropdown-item" href="#"  >

                    

                     
                       <strong style="margin-right:50px;"  req_id='.$row["id"].' id="user_req">'.$row["firstname"].'   '.$row["lastname"].'</strong>


                   
                        <button style="margin-left:40px" id="confirm" class="btn btn-primary" stas="'.$row["deg"].'" creq_id='.$row["id"].' >Confirm</button><button style="margin-left:10px" id="delete" class="btn btn-danger" dreq_id='.$row["id"].' >Delete</button>




              

                 </a>


              


             </li>


        

        ';
      

     }
   }
   if($n==0)
   {
     $output= '<strong style="padding:10px;">No request Found</strong>';
   }



   
  


   $data=array(

      'request' => $output,
      'count'=>$n

   );

 echo json_encode($data);

}




// **************************** User Profile **************************//


if(isset($_POST['user_profile']))
{
   $id=$_POST['id'];

   $q="select * from register_user where id=".$id."";

   if($r=mysql_query($q))
   {
      $n=mysql_num_rows($r);

      if($n==1)
      {
           $res=mysql_fetch_assoc($r);

           $des=$res['deg'];

           if($des==2)
           {
             $d="Vice Precident(Publication)";
           }
           else if($des==3)
           {
              $d="Vice Precident(Organization)";
           }
           else if($des==1)
           {
              $d="President";
           }

           else if($des==4)
           {
              $d="Vice Precident(Cultural)";
           }
           else if($des==5)
           {
              $d="Club Coordinator";
           }
           else if($des==6)
           {
              $d="Member";
           }
           else
           {
              $d="Not a Member";
           }

           echo' 

          <div class="alert alert-info" role="alert" id="profile_show" style="background-color: #337AB7; margin-bottom:20px;margin-top:70px"><p style="text-align: center;color: #fff">REQUESTOR PROFILE</p></div>


           <form id="show_user">
     

           <div class="col-sm-6">
             <label for="firstname" style="color: #000">First Name:</label>
             <input class="form-control" value="'. $res['firstname'].'" readonly>
            
           </div>

           <div class="col-sm-6">
             <label for="lastname" style="color: #000">Last Name:</label>
             <input class="form-control" type="text"  value="'.$res['lastname'].'"  readonly>
            
           </div>

            <div class="col-sm-12" style="margin-top: 10px">
            <label  style="color: #000">Requested Designation:</label>
            <input type="text" class="form-control" value="'.$d.'" readonly>
           
           </div>

      

          <div class="col-sm-12" style="margin-top: 10px">
          <label  style="color: #000">Department:</label>
          <input type="text" class="form-control" value="'.$res['dept'].'" readonly>
         
         </div>

         <div class="col-sm-12" style="margin-top: 20px" id="btn_gp">
        
           <button style="margin-left:360px" id="confirm2" class="btn btn-lg btn-primary" stas="'.$res["deg"].'" creq_id='.$id.' >Confirm</button><button style="margin-left:20px" id="delete" class="btn btn-lg btn-danger" dreq_id='.$id.' >Delete</button>
           </div>

        </form>';

      }
      else
      {
        echo 'Profile Does not exist';
      }
   }
}



// ******************** User Request Accept ******************//

if(isset($_POST['accept_req']))
{
   $id=$_POST['id'];
   $stt=$_POST['stt'];

        $date=new DateTime();
        $date->modify("+4 hours");
        $dt = $date->format('F j, Y'); 

   $q="update register_user set start_date='$dt', status=$stt where id=".$id."";

   if($res=mysql_query($q))
   {
      echo '67';
   }
   else
   {
      echo '99';
   }
}



// ******************** User Request Delete ******************//

if(isset($_POST['delete_req']))
{
   $id=$_POST['id'];


   $q="update register_user set status=100 where id=".$id."";

   if($res=mysql_query($q))
   {
      echo '67';
   }
   else
   {
      echo '99';
   }
}




// **************************** My Profile **************************//


if(isset($_POST['my_profile']))
{
   $id=$_POST['id'];

   $q="select * from register_user where id=".$id."";

   if($r=mysql_query($q))
   {
      $n=mysql_num_rows($r);

      if($n==1)
      {
           $res=mysql_fetch_assoc($r);

           $des=$res['deg'];

           if($des==1 && $res['status']==1)
           {
             $d="President";
           }
           else if($des==2 && $res['status']==2)
           {
             $d="Vice Precident(Publication)";
           }
           else if($des==3 && $res['status']==3)
           {
              $d="Vice Precident(Organization)";
           }
           else if($des==4 && $res['status']==4)
           {
              $d="Vice Precident(Cultural)";
           }
           else if($des==5 && $res['status']==5)
           {
              $d="Club Coordinator";
           }
           else if($des==6 && $res['status']==6)
           {
              $d="Member";
           }
           else if($des==1 && $res['status']==7)
           {
             $d="Previous President";
           }
           else if($des==2 && $res['status']==8)
           {
             $d="Previous Vice Precident(Publication)";
           }
           else if($des==3 && $res['status']==8)
           {
              $d="Previous Vice Precident(Organization)";
           }
           else if($des==4 && $res['status']==8)
           {
              $d="Previous Vice Precident(Cultural)";
           }
           else if($des==5 && $res['status']==9)
           {
              $d="Previous Club Coordinator";
           }
           else if($des==6 && $res['status']==10)
           {
              $d="Previous Member";
           }
           else if($des==1000)
           {
              $d="Super Admin";
           }
           else
           {
              $d="Not a Member";
           }

           $dep=$res['dept'];

           echo' 

          <div class="alert alert-info" role="alert" id="profile_show" style="background-color: #337AB7; margin-bottom:20px;margin-top:70px;"><p style="text-align: center;color: #fff">MY PROFILE</p></div>


           <form id="show_user">
     

           <div class="col-sm-6">
             <label for="firstname" style="color: #000">First Name:</label>
             <input class="form-control"id="fn_u" value="'. $res['firstname'].'" >
             <span class="error_form" id="rfirstname_error_u"></span>
            
           </div>

           <div class="col-sm-6">
             <label for="lastname" style="color: #000">Last Name:</label>
             <input class="form-control" id="ln_u" type="text"  value="'.$res['lastname'].'"  >
             <span class="error_form" id="rlastname_error_u"></span>
            
           </div>

            <div class="col-sm-12" style="margin-top: 10px">
            <label  style="color: #000">Designation:</label>
            <input type="text" class="form-control" value="'.$d.'" readonly>
           
           </div>

           <div class="col-sm-12" style="margin-top: 10px">
            <label  style="color: #000">Email:</label>
            <input type="email" class="form-control" id="" value="'.$res['email'].'" readonly >
            
           
           </div>

           <div class="col-sm-12" style="margin-top: 10px">
            <label  style="color: #000">Password:</label>
            <input type="password" id="" class="form-control" value="'.$res['password'].'" readonly >
           
           
           </div>

      

       

             <div class="col-sm-12" style="margin-top: 10px">

                 <label  style="color: #000">Department:</label>
                
                  <select  class="form-control" id="select_dept_u">

                    <option value="'.$dep.'">'.$dep.'</option>';

                      if($dep!="CSE")
                      {
                        echo '<option value="CSE">CSE</option>';
                      }
                      if($dep!="ME")
                      {
                        echo '<option value="ME">ME</option>';
                      }
                      if($dep!="EECE")
                      {
                        echo '<option value="EECE">EECE</option>';
                      }
                       if($dep!="PME")
                      {
                        echo '<option value="PME">PME</option>';
                      }
                      if($dep!="NSE")
                      {
                        echo '<option value="NSE">NSE</option>';
                      }
                      if($dep!="EWCE")
                      {
                        echo '<option value="EWCE">EWCE</option>';
                      }
                   

            echo      '</select>

                       <span class="error_form" id="rdept_error_u"></span>
                  
              </div>



         <div class="col-sm-12" align="center" style="margin-top: 20px" id="btn_gp">
        
           <button id="update_my_profile" class="btn btn-lg btn-primary"  creq_id='.$id.' >Update</button>
           </div>

        </form>';

      


       

      }
      else
      {
        echo 'Profile Does not exist';
      }
   }
}




//-------------- Update User Profile -----------------//


if(isset($_POST['my_profile_update']))
{

  $id=$_POST['id'];
  $f=$_POST['fn'];
  $l=$_POST['ln'];
 
  $d=$_POST['dep'];



  



   $query='SELECT * FROM register_user WHERE id='.$id.'';



   $data=mysql_query($query);



    $n=mysql_num_rows($data);

    if($n==0)
    {
      echo '<div class="alert alert-danger" role="alert"><b> Data could not be updated</b></div>';
    }
    else
    {
        $query2="update register_user set firstname='$f',lastname='$l',dept='$d' where id=$id";
         
      //  echo $query2; 
         

        if(mysql_query($query2))
        {
          echo '<div class="alert alert-success" role="alert"><b>Data Updated successfully</b></div>';
        }
        else
        {
           echo '<div class="alert alert-success" role="alert"><b> Data could not be updated</b></div>';
        }

    }

  



}







// **************************** Update Email Password **************************//


if(isset($_POST['my_profile_update_em_pass']))
{
   $id=$_POST['id'];

   $q="select * from register_user where id=".$id."";

   if($r=mysql_query($q))
   {
      $n=mysql_num_rows($r);

      if($n==1)
      {
           $res=mysql_fetch_assoc($r);

          

           echo' 

          <div class="alert alert-info" role="alert" id="profile_show" style="background-color: #337AB7; margin-bottom:20px;margin-top:70px;"><p style="text-align: center;color: #fff">CHANGE EMAIL & PASSWORD</p></div>


           <form id="">
     


           <div class="col-sm-12" style="margin-top: 10px">
            <label  style="color: #000">Email:</label>
            <input type="email" class="form-control" id="em_u" value="'.$res['email'].'"  >
            <span class="error_form" id="remail_error_u"></span>
           
           </div>

            <div class="col-sm-12" style="margin-top: 10px">
            <label  style="color: #000">Password:</label>
            <input type="password" id="pass_u" class="form-control" value="'.$res['password'].'"  >
            <input type="checkbox" onclick="myPassword()">Show Password</br>
            <span class="error_form" style="margin-top:5px;" id="rpassword_error_u"></span>
           
           </div>

          


         <div class="col-sm-12" align="center" style="margin-top: 20px" id="btn_gp">
        
           <button id="update_my_Email_Password" class="btn btn-lg btn-primary"  creq_id='.$id.' >Update</button>
           </div>

        </form>';



        
       

      }
      else
      {
        echo 'Profile Does not exist';
      }
   }
}





//-------------- Update User Email and password -----------------//


if(isset($_POST['my_profile_update_em_pass_done']))
{

  $id=$_POST['id'];
  $f=$_POST['em'];
  $l=$_POST['pass'];
 
 

   $query='SELECT * FROM register_user WHERE id='.$id.'';



   $data=mysql_query($query);



    $n=mysql_num_rows($data);

    if($n==0)
    {
      echo '<div class="alert alert-danger" role="alert"><b> Data could not be updated</b></div>';
    }
    else
    {
        $query2="update register_user set email='$f',password='$l' where id=$id";
         
      //  echo $query2; 
         

        if(mysql_query($query2))
        {
          echo '<div class="alert alert-success" role="alert"><b>Data Updated successfully</b></div>';
        }
        else
        {
           echo '<div class="alert alert-success" role="alert"><b> Data could not be updated</b></div>';
        }

    }

  



}





//-------------- Show Groups -----------------//


if(isset($_POST['groups_president']))
{


  //************************** President *********************//




   $query6='SELECT id,dept,firstname,lastname,start_date,deg FROM register_user WHERE status=1';



    $data6=mysql_query($query6);

   


    $n6=mysql_num_rows($data6);


     echo '<div align="right"><button type="button" class="btn btn-success btn-md " id="prev_pres_show" style="margin-top:70px;">Show Previous Presidents</button></div>';


    if($n6==0)
    {
      echo '<div class="alert alert-danger" style="margin-top:15px;background-color: #337AB7; color:#fff ;text-align:center" role="alert"><b>No President</b></div>';
    }
    else
    {

          echo  '<div class="alert alert-success" role="alert"  style="margin-bottom:17px;background-color: #337AB7; color:#fff ;margin-top:15px; text-align:center"><b>President</b></div>';

          echo '

                  <table class="table table-striped">

                     <thead>

                        <tr> <th  style="text-align:center; font-size:17px ">Name</th>
                             <th  style="text-align:center; font-size:17px ">Department</th> 
                             <th  style="text-align:center; font-size:17px ">Start Date</th>
                             <th  style="text-align:center; font-size:17px ">Designation</th>';


                      if($_SESSION['st']==1000)
                      {
                            echo '
                                
                                 <th  style="text-align:center; font-size:17px ">Action</th> 

                            ';
                      }
                            

                           
          echo          '</tr> 

                     </thead>

                    <tbody>';

        if($res6=mysql_query($query6))
        {

            while($row6=mysql_fetch_assoc($res6))
            {

               $des6=$row6['deg'];

               if($des6==1)
               {
                 $d6="President";
               }
              



                echo '

                    <tr> <td align="center">'.$row6['firstname'].' '.$row6['lastname'].'</td> <td align="center">'.$row6['dept'].'</td><td align="center">'.$row6['start_date'].'</td><td align="center">'.$d6.'</td>


                    ';

                 if($_SESSION['st']==1000)
                 {
                     echo '

                         <td align="center"> <button type="button" class="btn btn-danger btn-sm dis_pres" dis_pres="'.$row6['id'].'">Disable President</button></td>

                     ';
                 }      
            }

             echo     '</tr></tbody>

                     </table>

                   

                       ';    

        }
        else
        {
           echo '<div class="alert alert-success" style="margin-top:70px" role="alert"><b> Data could not be found</b></div>';
        }

    }


}



if(isset($_POST['groups_vice_president']))
{

  
   
   //********************** Vice President **********************//
  
 
    $query='SELECT id,dept,firstname,lastname,start_date,deg FROM register_user WHERE status=2 OR status=3 OR status=4';



    $data=mysql_query($query);

   


    $n=mysql_num_rows($data);


     echo '<div align="right"><button type="button" class="btn btn-success btn-md " id="prev_vice_pres" style="margin-top:70px;">Show Previous Vice Presidents</button></div>';


    if($n==0)
    {
      echo '<div class="alert alert-danger" style="margin-top:15px;background-color: #337AB7; color:#fff ; text-align:center" role="alert"><b>No Vice President</b></div>';
    }
    else
    {

          echo  '<div class="alert alert-success" role="alert"  style="margin-bottom:17px;margin-top:15px;background-color: #337AB7; color:#fff ; text-align:center"><b>Vice President</b></div>';

          echo '

                  <table class="table table-striped">

                     <thead>

                        <tr> <th  style="text-align:center; font-size:17px ">Name</th>
                             <th  style="text-align:center; font-size:17px ">Department</th> 
                             <th  style="text-align:center; font-size:17px ">Start Date</th>
                             <th  style="text-align:center; font-size:17px ">Designation</th>'; 

                  if($_SESSION['st']==1 || $_SESSION['st']==1000)
                  {
                        echo '

                            <th  style="text-align:center; font-size:17px ">Action</th> 


                        ';
                  }          



          echo          '</tr> 

                     </thead>

                    <tbody>';

        if($res=mysql_query($query))
        {

            while($row=mysql_fetch_assoc($res))
            {

               $des=$row['deg'];

               if($des==2)
               {
                 $d="Vice Precident(Publication)";
               }
               else if($des==3)
               {
                  $d="Vice Precident(Organization)";
               }
               else if($des==4)
               {
                  $d="Vice Precident(Cultural)";
               }
              



                echo '

                    <tr> <td align="center">'.$row['firstname'].' '.$row['lastname'].'</td> <td align="center">'.$row['dept'].'</td><td align="center">'.$row['start_date'].'</td><td align="center">'.$d.'</td>';



                 if($_SESSION['st']==1 || $_SESSION['st']==1000)
                 {
                     echo '

                         <td align="center"> <button type="button" class="btn btn-danger btn-sm dis_vice" dis_v="'.$row['id'].'">Disable Membership</button></td>

                     ';
                 }   



                echo   '</tr>


                    ';
            }

             echo     '</tbody>

                     </table>

                   

                       ';    

        }
        else
        {
           echo '<div class="alert alert-success" style="margin-top:70px" role="alert"><b> Data could not be found</b></div>';
        }

    }

   

}



if(isset($_POST['groups_club_coordinator']))
{


  //**************************  Club Coordinator *********************//




   $query3='SELECT id,dept,firstname,lastname,start_date,deg FROM register_user WHERE status=5';



    $data3=mysql_query($query3);

   


    $n3=mysql_num_rows($data3);


     echo '<div align="right"><button type="button" class="btn btn-success btn-md " id="prev_cc_show" style="margin-top:70px;">Show Previous Club Coordinators</button></div>';


    if($n3==0)
    {
      echo '<div class="alert alert-danger" style="margin-top:15px; text-align:center;background-color: #337AB7; color:#fff ;" role="alert"><b>No Club Coordinators</b></div>';
    }
    else
    {

          echo  '<div class="alert alert-success" role="alert"  style="margin-bottom:17px;background-color: #337AB7; color:#fff ;margin-top:15px; text-align:center"><b>Club Coordinators</b></div>';

          echo '

                  <table class="table table-striped">

                     <thead>

                        <tr> <th  style="text-align:center; font-size:17px ">Name</th>
                             <th  style="text-align:center; font-size:17px ">Department</th> 
                             <th  style="text-align:center; font-size:17px ">Start Date</th>
                             <th  style="text-align:center; font-size:17px ">Designation</th>'; 


                        if($_SESSION['st']==1 || $_SESSION['st']==1000)
                        {

                            echo '
                                
                                 <th  style="text-align:center; font-size:17px ">Action</th> 

                            ';
                        }    


          echo              '</tr> 

                     </thead>

                    <tbody>';

        if($res3=mysql_query($query3))
        {

            while($row3=mysql_fetch_assoc($res3))
            {

               $des3=$row3['deg'];

               if($des3==5)
               {
                 $d3="Club Coordinator";
               }
              



                echo '

                    <tr> <td align="center">'.$row3['firstname'].' '.$row3['lastname'].'</td> <td align="center">'.$row3['dept'].'</td><td align="center">'.$row3['start_date'].'</td><td align="center">'.$d3.'</td>';

                if($_SESSION['st']==1 || $_SESSION['st']==1000)
                {
                   echo   '<td align="center"> <button type="button" class="btn btn-danger btn-sm dis_cc" dis_c="'.$row3['id'].'">Disable Membership</button></td>';
                }

               


                echo    '</tr>


                    ';
            }

             echo     '</tbody>

                     </table>

                   

                       ';    

        }
        else
        {
           echo '<div class="alert alert-success" style="margin-top:70px" role="alert"><b> Data could not be found</b></div>';
        }

    }


      

}


if(isset($_POST['groups_member']))
{





  //************************** Members *********************//




   $query4='SELECT id,dept,firstname,lastname,start_date,deg FROM register_user WHERE status=6';



    $data4=mysql_query($query4);

   


    $n4=mysql_num_rows($data4);


     echo '<div align="right"><button type="button" class="btn btn-success btn-md " id="prev_mm" style="margin-top:70px;">Show Previous Members</button></div>';


    if($n4==0)
    {
      echo '<div class="alert alert-danger" style="margin-top:15px; text-align:center;background-color: #337AB7; color:#fff ;" role="alert"><b>No Member</b></div>';
    }
    else
    {

          echo  '<div class="alert alert-success" role="alert"  style="margin-bottom:17px;margin-top:15px; text-align:center;background-color: #337AB7; color:#fff ;"><b>Members</b></div>';

          echo '

                  <table class="table table-striped">

                     <thead>

                        <tr> <th  style="text-align:center; font-size:17px ">Name</th>
                             <th  style="text-align:center; font-size:17px ">Department</th> 
                             <th  style="text-align:center; font-size:17px ">Start Date</th>
                             <th  style="text-align:center; font-size:17px ">Designation</th>'; 

                   if($_SESSION['st']==1 || $_SESSION['st']==1000)
                   {

                      echo '<th  style="text-align:center; font-size:17px ">Action</th>';

                   }

                        

          echo          '</tr> 

                     </thead>

                    <tbody>';

        if($res4=mysql_query($query4))
        {

            while($row4=mysql_fetch_assoc($res4))
            {

               $des4=$row4['deg'];

               if($des4==6)
               {
                 $d4="Member";
               }
              



                echo '

                    <tr> <td align="center">'.$row4['firstname'].' '.$row4['lastname'].'</td> <td align="center">'.$row4['dept'].'</td><td align="center">'.$row4['start_date'].'</td><td align="center">'.$d4.'</td>';

                if($_SESSION['st']==1 || $_SESSION['st']==1000)
                {

                   echo  '<td align="center"> <button type="button" class="btn btn-danger btn-sm dis_m" dis_m="'.$row4['id'].'">Disable Membership</button></td>';

                }    


                 

                echo   '</tr>


                    ';
            }

             echo     '</tbody>

                     </table>

                   

                       ';    

        }
        else
        {
           echo '<div class="alert alert-success" style="margin-top:70px" role="alert"><b> Data could not be found</b></div>';
        }

    }
  

    
  



}



// ******************** disable Vice President ******************//

if(isset($_POST['vice_pre']))
{
   $id=$_POST['id'];
  

   //$date=date('Y-m-d');


        $date=new DateTime();
        $date->modify("+4 hours");
        $dt = $date->format('F j, Y');
        
   
   $q="update register_user set end_date='$dt',status=8 where id=".$id."";

   if($res=mysql_query($q))
   {
      echo '67';
   }
   else
   {
      echo '99';
   }
}



// ******************** disable Club Coordinator ******************//

if(isset($_POST['cc']))
{
   $id=$_POST['id'];
  

   //$date=date('Y-m-d');


        $date=new DateTime();
        $date->modify("+4 hours");
        $dt = $date->format('F j, Y');
        
   
   $q="update register_user set end_date='$dt',status=9 where id=".$id."";

   if($res=mysql_query($q))
   {
      echo '67';
   }
   else
   {
      echo '99';
   }
}




// ******************** disable Member ******************//

if(isset($_POST['mm']))
{
   $id=$_POST['id'];
  

   //$date=date('Y-m-d');


        $date=new DateTime();
        $date->modify("+4 hours");
        $dt = $date->format('F j, Y');
        
   
   $q="update register_user set end_date='$dt',status=10 where id=".$id."";

   if($res=mysql_query($q))
   {
      echo '67';
   }
   else
   {
      echo '99';
   }
}




//-------------- Previous vice Presidents -----------------//


if(isset($_POST['prev_vice']))
{

  
 
    $query='SELECT dept,firstname,lastname,start_date,end_date,deg FROM register_user WHERE status=8';



    $data=mysql_query($query);

   


    $n=mysql_num_rows($data);



     echo '<div align="right" style="margin-top:70px;"><button type="button" class="btn btn-success btn-md" id="prev_vice_pres_back" style="">Back To Previous Page</button></div>';



    if($n==0)
    {
      echo '<div class="alert alert-danger" style="margin-top:15px; text-align:center" role="alert"><b>No Vice President</b></div>';
    }
    else
    {

          echo  '<div class="alert alert-success" role="alert"  style="margin-bottom:10px;margin-top:15px; text-align:center"><b>Previous Vice Presidents</b></div>';

          echo '

                  <table class="table table-striped">

                     <thead>

                        <tr> <th  style="text-align:center; font-size:17px ">Name</th>
                             <th  style="text-align:center; font-size:17px ">Department</th> 
                             <th  style="text-align:center; font-size:17px ">Start date</th> 
                             <th  style="text-align:center; font-size:17px ">End date</th> 
                             <th  style="text-align:center; font-size:17px ">Designation</th> 
                             
                        </tr> 

                     </thead>

                    <tbody>';

        if($res=mysql_query($query))
        {

            while($row=mysql_fetch_assoc($res))
            {

               $des=$row['deg'];

               if($des==2)
               {
                 $d="Vice President(Publication)";
               }
               else if($des==3)
               {
                  $d="Vice President(Organization)";
               }
               else if($des==4)
               {
                  $d="Vice President(Cultural)";
               }

                echo '

                    <tr> <td align="center">'.$row['firstname'].' '.$row['lastname'].'</td> <td align="center">'.$row['dept'].'</td><td align="center">'.$row['start_date'].'</td><td align="center">'.$row['end_date'].'</td><td align="center">'.$d.'</td></tr>


                    ';
            }

             echo     '</tbody>

                     </table>

                   

                       ';    

        }
        else
        {
           echo '<div class="alert alert-success" style="margin-top:70px" role="alert"><b> Data could not be found</b></div>';
        }

    }


  



}






//-------------- Previous Club Coordinators -----------------//


if(isset($_POST['prev_ccs']))
{

  
 
    $query='SELECT dept,firstname,lastname,start_date,end_date,deg FROM register_user WHERE status=9';



    $data=mysql_query($query);

   


    $n=mysql_num_rows($data);



     echo '<div align="right" style="margin-top:70px;"><button type="button" class="btn btn-success btn-md" id="prev_club_coordinator" style="">Back To Previous Page</button></div>';



    if($n==0)
    {
      echo '<div class="alert alert-danger" style="margin-top:15px; text-align:center" role="alert"><b>No Club Coordinator</b></div>';
    }
    else
    {

          echo  '<div class="alert alert-success" role="alert"  style="margin-bottom:10px;margin-top:15px; text-align:center"><b>Previous Club Coordinators</b></div>';

          echo '

                  <table class="table table-striped">

                     <thead>

                        <tr> <th  style="text-align:center; font-size:17px ">Name</th>
                             <th  style="text-align:center; font-size:17px ">Department</th> 
                             <th  style="text-align:center; font-size:17px ">Start date</th> 
                             <th  style="text-align:center; font-size:17px ">End date</th> 
                             <th  style="text-align:center; font-size:17px ">Designation</th> 
                             
                        </tr> 

                     </thead>

                    <tbody>';

        if($res=mysql_query($query))
        {

            while($row=mysql_fetch_assoc($res))
            {

               $des=$row['deg'];

               if($des==5)
               {
                 $d="Club Coordinator";
               }
              
                echo '

                    <tr> <td align="center">'.$row['firstname'].' '.$row['lastname'].'</td> <td align="center">'.$row['dept'].'</td><td align="center">'.$row['start_date'].'</td><td align="center">'.$row['end_date'].'</td><td align="center">'.$d.'</td></tr>


                    ';
            }

             echo     '</tbody>

                     </table>

                   

                       ';    

        }
        else
        {
           echo '<div class="alert alert-success" style="margin-top:70px" role="alert"><b> Data could not be found</b></div>';
        }

    }


  



}




//-------------- Previous Member -----------------//


if(isset($_POST['prev_mm']))
{

  
 
    $query='SELECT dept,firstname,lastname,start_date,end_date,deg FROM register_user WHERE status=10';



    $data=mysql_query($query);

   


    $n=mysql_num_rows($data);



     echo '<div align="right" style="margin-top:70px;"><button type="button" class="btn btn-success btn-md" id="prev_member_back" style="">Back To Previous Page</button></div>';



    if($n==0)
    {
      echo '<div class="alert alert-danger" style="margin-top:15px; text-align:center" role="alert"><b>No Member</b></div>';
    }
    else
    {

          echo  '<div class="alert alert-success" role="alert"  style="margin-bottom:10px;margin-top:15px; text-align:center"><b>Previous Members</b></div>';

          echo '

                  <table class="table table-striped">

                     <thead>

                        <tr> <th  style="text-align:center; font-size:17px ">Name</th>
                             <th  style="text-align:center; font-size:17px ">Department</th> 
                             <th  style="text-align:center; font-size:17px ">Start date</th> 
                             <th  style="text-align:center; font-size:17px ">End date</th> 
                             <th  style="text-align:center; font-size:17px ">Designation</th> 
                             
                        </tr> 

                     </thead>

                    <tbody>';

        if($res=mysql_query($query))
        {

            while($row=mysql_fetch_assoc($res))
            {

               $des=$row['deg'];

               if($des==6)
               {
                 $d="Member";
               }
              
                echo '

                    <tr> <td align="center">'.$row['firstname'].' '.$row['lastname'].'</td> <td align="center">'.$row['dept'].'</td><td align="center">'.$row['start_date'].'</td><td align="center">'.$row['end_date'].'</td><td align="center">'.$d.'</td></tr>


                    ';
            }

             echo     '</tbody>

                     </table>

                   

                       ';    

        }
        else
        {
           echo '<div class="alert alert-success" style="margin-top:70px" role="alert"><b> Data could not be found</b></div>';
        }

    }


  



}




//-------------- Previous President -----------------//


if(isset($_POST['prev_pp']))
{

  
 
    $query='SELECT dept,firstname,lastname,start_date,end_date,deg FROM register_user WHERE status=7';



    $data=mysql_query($query);

   


    $n=mysql_num_rows($data);



     echo '<div align="right" style="margin-top:70px;"><button type="button" class="btn btn-success btn-md" id="prev_page_pres_back" style="">Back To Previous Page</button></div>';



    if($n==0)
    {
      echo '<div class="alert alert-danger" style="margin-top:15px; text-align:center" role="alert"><b>No Previous President record</b></div>';
    }
    else
    {

          echo  '<div class="alert alert-success" role="alert"  style="margin-bottom:10px;margin-top:15px; text-align:center"><b>Previous Presidents</b></div>';

          echo '

                  <table class="table table-striped">

                     <thead>

                        <tr> <th  style="text-align:center; font-size:17px ">Name</th>
                             <th  style="text-align:center; font-size:17px ">Department</th> 
                             <th  style="text-align:center; font-size:17px ">Start date</th> 
                             <th  style="text-align:center; font-size:17px ">End date</th> 
                             <th  style="text-align:center; font-size:17px ">Designation</th> 
                             
                        </tr> 

                     </thead>

                    <tbody>';

        if($res=mysql_query($query))
        {

            while($row=mysql_fetch_assoc($res))
            {

               $des=$row['deg'];

               if($des==1)
               {
                 $d="President";
               }
              
                echo '

                    <tr> <td align="center">'.$row['firstname'].' '.$row['lastname'].'</td> <td align="center">'.$row['dept'].'</td><td align="center">'.$row['start_date'].'</td><td align="center">'.$row['end_date'].'</td><td align="center">'.$d.'</td></tr>


                    ';
            }

             echo     '</tbody>

                     </table>

                   

                       ';    

        }
        else
        {
           echo '<div class="alert alert-success" style="margin-top:70px" role="alert"><b> Data could not be found</b></div>';
        }

    }


  



}



?>