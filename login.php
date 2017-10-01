<?php

class login {






function check_userName ($user_name_email,$password) {
   session_start();
require "dbcontroller.php";

$obj = new sqlHelper; 
//$pages = R::find('users',' userName = ? & password = ? ',
            //    array($user_name_email,$password)
            //   );

			   
			   
	$sql = "SELECT * FROM user WHERE 
        email = '".$user_name_email."'    ";
    $rows = R::getAll( $sql );
			   
	  $usres = R::convertToBeans( 'user', $rows );  
		
	

 


	
    if(count($usres)>0) {
                         $password_encrypted= $rows[0][password];

 echo $password_encrypted;
    if (password_verify($password, $password_encrypted)==true) {
    		 echo "you will be convert it to  main page for adding new ...";
            $response = "<p><h1>Login Successful</h1></p><p>We won't keep you logged in on this computer.</p>";
              $_SESSION["username"]=$userName=$user_name_email;
             $_SESSION["password"]=$password;                  
									 
echo ";sdfd";
header('Location: index.php');
        
        
}else if(password_verify($password, $password_encrypted)==false) {

echo "the password is wrong";
}



    }
    else if(count($usres)==0){
        $response = "<p><h1>Login Not Successful</h1></p><p>Invalid username or password.</p>";
		echo "please try to login again ";

    }}

 
 
 
 }
 
 $lo = new login ;
 
 $lo->check_userName($_POST["username"],$_POST["password"]);
 //$helpme = new helpFunction;
 //$helpme ->get_password_match("ad","am");
?>