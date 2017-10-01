

<?php
//require_once(SMARTY_DIR . 'C:/AppServ/www/project/registration_GIT/smarty-master/libs/Smarty.class.php');

class Update_article {
 
   protected $update_status;
   
   
   function set_update_status($update_st) {
       $this->$update_status=$update_st;
   }
   function get_update_status() {
       
       return $this->$update_status;
   }
    function process_update () {
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


 $smarty->display('header.tpl');
if (isset($_SESSION["username"]) and isset($_SESSION["password"])){
//function get_password_match ($pass,$user) {



if($help->get_password_match($_SESSION["password"],$_SESSION["username"])==true)
{
 
   $usuer_id= $help->querying_user($_SESSION["username"],$_SESSION["password"]);
    $smarty->assign('usuer_id',$usuer_id);
   
   $articles_list_object=$help->dissplay_art_for_user($usuer_id);
   
   
   
   
   
    if($articles_list_object!=null)
   {
       $smarty->assign('list_articles', $articles_list_object);
   
   
    $smarty->display('update.tpl'); // from here lets try something ! sending an array 
   }else if($articles_list_object==null) {
       echo "dont have any articles for this writer and his id is ".$usuer_id;
   }
   
   
   
   
   
   
   
   
   
}else if($help->get_password_match($_SESSION["password"],$_SESSION["username"])==false){
    $smarty->display('Warning.tpl');
}


}else if(empty ($_SESSION["username"]) and empty($_SESSION["password"])){
    echo "<br> you didnot login please login to update an article";
}

$smarty->display('footer.tpl');
}



}

$update_me=new Update_article;

$update_me->process_update();
?>