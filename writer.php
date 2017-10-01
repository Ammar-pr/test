
<?php

class writer {
    
    
protected $writer_id ;
protected $email;
protected $pass;
protected $list_of_article; 
    
    
    
       function __construct($email,$pass,$list_of_article) {
       $this->email=$email;
       $this->pass=$pass;
       $this->list_of_article=$list_of_article;
   }

    
   function setEmail($email) {
        $this->email=$email;
   } 
    
     function getEmail() {
       return  $this->email;
   } 
     function set_list_of_article($list_of_article) {
      $this->list_of_article=$list_of_article;
   } 
    
       function get_list_of_article() {
     return $this->list_of_article;
    } 
}

?>