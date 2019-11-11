
<?php

mysql_connect("localhost","root","");

mysql_select_db("literatute_club");

session_start();


mysql_connect("localhost","root","");

mysql_select_db("literatute_club");

$sqlcon = new mysqli("localhost", "root","", "literatute_club");




if(isset($_POST['about_show']))
{
	 $q="SELECT * FROM about";

     $data=mysql_query($q);

	 if(mysql_num_rows($data)>0)
	   {

	   	 
						      

		         $row=mysql_fetch_assoc($data);

				 # code...
				 echo '<p style="color: #000;text-align: center;font-size: 28px;margin-top:40px;">'.$row["header"].'</p>';
				 echo '<p style="color: #000;text-align: justify;text-justify: inter-word;font-size: 18px;margin-top:20px;">'.$row["description"].'</p>';

			 
	    }
	    else
	    {
	    	echo '<p style="color: #000;text-align: center;font-size: 40px;">No Information Added</p>';
	    }
}


// ************** Notice ***************//

if(isset($_POST['notice_show']))
{

	 $id=$_POST['id'];

	 $q="SELECT * FROM breaking where id=$id";

     $data=mysql_query($q);

	 if(mysql_num_rows($data)>0)
	   {

	   	 
						      

		         $rowb=mysql_fetch_assoc($data);

		                $head=$rowb['head'];

                     	$des=nl2br($rowb['bdesc']);

                     	$ln=$rowb['linkname'];

                     	$l=$rowb['link'];


				 # code...
				 echo '


                               
							        <p style="text-align: center justify;text-justify: inter-word;font-size: 18px;color: #000;"><b>'.$head.'</b></p>

							         <p style="margin-top: 5px;text-align: justify;text-justify: inter-word;color: #000;">'.$des.'</p>



                                     

                                     </br>



							         ';


							         if($ln!='')
							         {
                                        
                                        echo '<p style=""><a href="'.$ln.'" style="color: #470b0f" target="_blank" ><b>'.$l.'</b></a></p>';
							         }



			 
	    }
	    else
	    {
	    	echo '<p style="color: #000;text-align: center;font-size: 40px;">No Information Added</p>';
	    }
}





// ***************** notice Total*****************//



function readMoreFunction($story_desc) {  
//Number of characters to show  

$chars = 200;  
$story_desc = substr($story_desc,0,$chars);  
$story_desc = substr($story_desc,0,strrpos($story_desc,' '));  
 
return $story_desc;  

} 





if(isset($_POST['notice_show_total']))
{

	

     $sql = $sqlcon->prepare('SELECT * from  notice ORDER BY id DESC');
  


	echo '

      
            <div class="col-md-12">';

           

           if($sql->execute())
           {

              $sql->store_result();

              $n=$sql->num_rows;

             if($n==0)
             {
                 
                      echo '

                          <div class="department-contact" style="margin-top: 30px;" align="center">
                            <p style=" font-size: 24px;"><strong>No Notice Information is Added</strong></p><br>
                           
                          </div>

                      ';
                    
             }
            
             else
             {

                 $sql->bind_result($id3,$head,$body);


             	while($sql->fetch())
             	{

                  $n=strlen($body);


                  $reg_exUrl = '/[-a-zA-Z0-9@:%_\+.~#?&\/\/=]{2,256}\.[a-z]{2,4}\b(\/[-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)?/i';

                // The Text you want to filter for urls
                
                  $des=nl2br($body);
               

                // Check if there is a url in the text
                
                if(preg_match($reg_exUrl, $des, $url)) {

                       // make the urls hyper links
                       
                       $des=preg_replace($reg_exUrl, "<a href='$url[0]' rel='nofollow' target='_blank' id='lnk_color'>{$url[0]}</a> ",$des);

                } 
                else
                {
                  $des=nl2br($body);
                }


                //echo $head;


             		
                     echo '
							       
						            
						     <div class="col-md-4">
						              
						              <div class="main_container2" style="align:center;">

						                  <h4 id="notice_head" style=" text-align:center; margin-bottom:10px;"><strong>'.$head.'</strong></h4>';

                             
                              
                                 echo ' <p id="notice_body" style=" text-align:center;">'.readMoreFunction($des).'<b>.....</b></p>
                                   
                                    <a href="#" align:center class="btn btn-small btn-tertiary show_total_notice_user" style="color: #fff;background: #533185; border: .0625rem solid #9177b9;" evt_notice_id="'.$id3.'">Read More</a>


                                 ';
                              



						                 


						                 echo '<div id="" >

							                   

						               </div>


						              </div>


						              


						         </div>


							';
     


             	}
             
             }

           }


            


      echo      '</div>

          

	';
}




if(isset($_POST['notice_show_detail']))
{

  //$event_id=$_POST['evt_id'];
  //$id=$_POST['iid'];

    $id=mysqli_real_escape_string($sqlcon,$_POST['iid']);
  
    $sql = $sqlcon->prepare('SELECT head,body from  notice where  id=?');

    $sql->bind_param('s', $id);

 
  

             $ct=0;


        

          if($sql->execute())
           {

             
               $sql->bind_result($head,$body);
             
               $sql->fetch();

               
              
                 $text=$body;
                 
                 
                 $reg_exUrl = "/(http|ftp)+(s)?:(\/\/)((\w|.)+)(\/)?(\S+)?/i";
  
                  preg_match_all($reg_exUrl, $text, $matches);
                    $usedPatterns = array();
                    
                    foreach($matches[0] as $pattern){
                        
                    if(!array_key_exists($pattern, $usedPatterns)){
                        $usedPatterns[$pattern]=true;
                        $text = str_replace  ($pattern, "<a href='{$pattern}' rel='nofollow' target='_blank' >{$pattern}</a> ", $text);
                    }
                }
                
                  // Check if there is a url in the text
                  /*if(preg_match($reg_exUrl, $string, $url)) {
                    
                      if(strpos( $url[0], ":" ) === false){
                        $link = 'http://'.$url[0];
                      }else{
                        $link = $url[0];
                      }
                      
                       // make the urls hyper links
                       $string = preg_replace($reg_exUrl, '<a href="'.$link.'" title="'.$url[0].'" target="_blank">'.$url[0].'</a>', $string);
                  
                  }*/
                           
              

                
                      echo '
                     
                       


                          <div class="" align="center"><b style="font-size:16px;">'.$head.'</b></div>

                            <div class="" align="center" style="margin-top:17px;">
                              '.$text.'
                            </div>



                        
               


                         ';
     


          }
             

}




?>