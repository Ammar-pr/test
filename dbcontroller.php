

<?php // Modified for Arabic by Rasheed Bydousi

class sqlHelper  {



 public function __construct()
  {

require_once '..\rb.php';

if (R::testConnection() != 1) {

     R::setup( 'mysql:host=localhost;dbname=test',
        'root', 'dwddwddwd' ); 
  
    $var= R::testConnection();
	
	
	//echo "the constractor is working fine ".$var;
   
}
  }


function printArrayItractor() {




		$arrayobject = new ArrayObject($usres);

$iterator = $arrayobject->getIterator();

while($iterator->valid()) {
    echo $iterator->key() . ' => ' . $iterator->current() . "\n";

    $iterator->next();
}

			
}


   


}


function close_connection () {

    R::close();

}


//$obj = new sqlHelper; // call rb.php inside the constructor
//var_dump($obj);


?>