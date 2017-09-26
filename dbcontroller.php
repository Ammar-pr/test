<?php // Modified for Arabic by Rasheed Bydousi

require '..\rb.php';




function check_connection () {
if (R::testConnection() != 1) {

     R::setup( 'mysql:host=localhost;dbname=test',
        'root', 'dwddwddwd' ); 
  
    $var= R::testConnection();
   
    return $var ;
}



} 

function test_unit_connection () {
  //$status =false ;
  $status= check_connection ();
    
  if($status=="1"){
     // echo "test unit for connection function is correct ";
      return "1";
  }else if($status=="")
  {
     // echo "test unit for connection function is  not correct ";
  
       return "";
  }
}


function main () {
    
    test_unit_connection ();
}


main ();

?>