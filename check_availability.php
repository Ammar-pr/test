<?php
require_once("dbcontroller.php");

function check_userName ($user_name_email) {
$pages = R::find('users',' userName = ? ', 
                array( $user_name_email )
               );

    return $check=  count($pages);

}


function test_unit_check_userName ($user_name_email) {
    $test_value=  check_userName ($user_name_email);
  
    
   if($test_value==1){
       return $test_value;
    echo "the function return one row from data base  correct ";   
   }else if($test_value==0){
           echo "the function return zeto  row from data base  correct ";   
     return $test_value;
   }
}


function send_user_massage() {
    
  if(!empty($_POST["username"])) {
       $user_name_email= $_POST["username"];
     $user_count= test_unit_check_userName ($user_name_email);
      
      if($user_count>0) {
      echo "<span class='status-not-available'> Username Not Available.</span>";
  }else{
 
      echo "<span class='status-available'> Username Available.</span>";
  }
      
      
  }  
    
}




send_user_massage();
//test_unit_check_userName ();
?>