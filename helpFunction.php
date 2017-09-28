<?php

include 'dbcontroller.php';

class helpFunction {

    public function path_activate_smarty() {
        date_default_timezone_set('America/New_York');

        require_once'smarty-master/libs/Smarty.class.php';
//$smarty = new Smarty();
//$smarty->template_dir = 'templates/';
//$smarty->compile_dir = 'templates_c/';
//$smarty->config_dir = 'configs/';
//$smarty->cache_dir = 'cache/';
//$smarty->assign('name','Ned');
    }

    public function path_activate_redBean() {
        
    }

    public function querying_user($user, $password) {


        /*
         * this function querying talbe users to get his id in order to deal with it when storing an article
          or updating , the user can make more then one article but the article not for more then one writer

         * 
         */

        $sqlhelp = new sqlHelper;
        $value = trim($user);
        $password = trim($user);
        $user = stripcslashes($user);
        $password = stripcslashes($password);
        
        
        
   //return $bar[0][userId];

  $rows = R::getAll("SELECT * FROM user where email='$user'");
  $bar = R::convertToBeans( 'user', $rows );  
        if (count($bar) > 0) {
        $password_encrypted=$rows[0][password];
        //echo "asds".$password_encrypted;
      if (password_verify($password, $password_encrypted)==true) {
          echo "2";
          echo $rows[0][id];
          return $rows[0][id];
}else if(password_verify($password, $password_encrypted)==false) {

    return 0 ;
}
            
           
        } else if (count($bar) == 0) {
    
            return 0;
        }
    }

    
    public function set_user($username,$password) {
$sqlhelp = new sqlHelper;
        $crypted_password = password_hash($password, PASSWORD_BCRYPT);
  
        

      $newUser= R::dispense('user');

              //rb-mysql.php
    //  $what=$_POST['what'];
      
      $newUser->email=$username;
         $newUser->password=$crypted_password;
      
         R::store($newUser); // store is done 
		 


    }
    



function get_password_match ($pass,$user) {
 $sqlhelp = new sqlHelper;
    

      $bar = R::getAll("SELECT * FROM user where email='$user'");

            $password_encrypted= $bar[0][password];


    if (password_verify($pass, $password_encrypted)==true) {
     return true ;
}else if(password_verify($pass, $password_encrypted)==false) {

    return false ;
}
}


// to run the class 

function update_article($title,$cont,$acId) {
   
    $sqlhelp = new sqlHelper; 
    // first avoid to run sql stetment for update tow colum because the user  has tow case
    // first case update tow colum title , content 
    // second is update one colune this case will be divded into to cases   
    // this function have behivar number - > 1,2,3,4,5,6
    
    $specfic_article= R::getAll( 'select * from articles where id= "'.$acId.'" ' );
    
    // in line 193 the goal is  : get article information on order to check if the user enter new information to be updated for one article
    $oldTitle=$specfic_article[0][title];
    $old_Content=$specfic_article[0][article_content];
    
    echo "sdfdf" .strcmp ( $oldTitle , trim($title) );
    if($title!=$oldTitle &  $cont!=$old_Content ){
      R::exec( 'update articles set title="'.$title.'" ,article_content="'.$cont.'"   where id="'.$acId.'"' ); 
      
      echo "update id done for title and content";
    }else if ($title==$oldTitle &  $cont!=$old_Content ){
     // in this case we should update only the  article_content coluom  
        
        
        
          R::exec( 'update articles set article_content="'.$cont.'"   where id="'.$acId.'"' ); 
        echo "update id done for   content";
    }else if ($title!=$oldTitle &  $cont==$old_Conten){
     // in this case we should update only the  title 
        
         R::exec( 'update articles set title="'.$title.'"    where id="'.$acId.'"' ); 
         
         echo "update is done for  for title only ";
    }else if ($title==$oldTitle &  $cont==$old_Content ){
     // in this case we should know that , the user enter same value for the same nothing change !
       echo "update connot be done because the writer insert same values for title and content  ";
    }

}




function process_article() {
    $sqlhelp = new sqlHelper;
    // title
    // content_article
    // user_id_hidden
    // case_to_be
    
    htmlspecialchars($_POST["title"]);
    htmlspecialchars($_POST["content_article"]);
    htmlspecialchars($_POST["user_id_hidden"]); // just in case the hacker change the paramter 
    htmlspecialchars($_POST["case_to_be"]);// just in case the hacker change the paramter 
    
    if( htmlspecialchars($_POST["case_to_be"])=="1"){
        // save article
        /*
         title
         user_id
         article_content
         the_date
         */
          $newArticle= R::dispense('articles');

              //rb-mysql.php
    //  $what=$_POST['what'];
    // date("l jS \of F Y h:i:s A")  
         $newArticle->title=htmlspecialchars($_POST["title"]);
         $newArticle->article_content=htmlspecialchars($_POST["content_article"]);
         $newArticle->user_id=htmlspecialchars($_POST["user_id_hidden"]);
          $newArticle->the_date=htmlspecialchars($_POST["user_id_hidden"]);
         
        // $newArticle->the_date=date("l jS \of F Y h:i:s A")  ;
         R::store($newArticle); // store is done 
        
    }else if(htmlspecialchars($_POST["case_to_be"])=="2")
    {
        // update article
    }else if(htmlspecialchars($_POST["case_to_be"])=="3")
    {
        // view all article
    }else if(htmlspecialchars($_POST["case_to_be"])=="4")
    {
        // delete  article
    } else {
        // nothing to use with this class  
    }
}


function dissplay_art_for_user($id) {
      $sqlhelp = new sqlHelper;
   $articles= R::getAll( 'select * from articles where user_id= "'.$id.'" ' );
     $bar = R::convertToBeans( 'user', $articles );  
          $counter=0;
     if(count($bar)>0){
         
         return $articles;
         
//     while ($counter <count($bar)){
//         echo "<br>";
//         echo $articles[$counter][id];
//          echo "<br>";
//         $counter++;
//     }
 } else  {
        return "none articles"; 
     }
     
}











}




$helpme = new helpFunction;
echo "br";
//$helpme->querying_user('', '');

//$helpme->set_user("am","am");
  // $helpme ->get_password_match("ad","am");
 $helpme->process_article();
 // $helpme->querying_user("am","am");
  //$helpme->dissplay_art_for_user(4);
//$helpme->update_article("zzzz","sdfsdf",10);
 ?>
 
