

<?php
class show_all_article {
 

    
    
function process_show_ar () {
require 'helpFunction.php';
$help = new helpFunction;
//$obj = new sqlHelper;
session_start();

$help->path_activate_smarty();
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';

//** un-comment the following line to show the debug console
//$smarty->debugging = true;



if($help->get_password_match($_SESSION["password"],$_SESSION["username"])==true)
{


   $usuer_id= $help->querying_user($_SESSION["username"],$_SESSION["password"]);
   
   if($usuer_id!=0)
   {
       $smarty->display('header.tpl');
      echo "you cannot login because you allready login !";
                $smarty->display('footer.tpl');
      
   /*   echo "
<meta http-equiv='refresh' content='0.16; url=Update_article.php'>
";*/
   }
  
   
   
}else if($help->get_password_match($_SESSION["password"],$_SESSION["username"])==false){
   $smarty->display('header.tpl');
   
   
   
   
  $smarty->display('login.tpl');

   
   
    
}



   }


    

}

$show_me=new show_all_article;

$show_me->process_show_ar();
?>