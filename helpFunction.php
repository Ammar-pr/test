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


}




$helpme = new helpFunction;
echo "br";
//$helpme->querying_user('', '');

//$helpme->set_user("am","am");
  // $helpme ->get_password_match("ad","am");
  $helpme->process_article();
 // $helpme->querying_user("am","am");
 ?>
 