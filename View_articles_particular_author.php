

<?php
//require_once(SMARTY_DIR . 'C:/AppServ/www/project/registration_GIT/smarty-master/libs/Smarty.class.php');
/*
 in this page using id of author or writer or user but here we deal with as user 
 *  take the user id and get the list of his or her articles and send it as parmater by using 
 * smartY , the object array list will dissplay on page delete_an_Article.tpl 
 * if the user want to delete any  Article from his Articles list he just click on delete then will be deleted 
 * the qustion is what if we went to take the backup we may coppy Article  object is other table just as backup 
 * 
 */
class View_articles_particular_author {
 

   function process_particular_articles () {
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
   
   
   
    $smarty->display('View_articles_particular_author.tpl'); // from here lets try something ! sending an array 

   }else if($articles_list_object==null) {
       echo "dont have any articles for this writer and his id is ".$usuer_id;
   }
  
   
   
   
   
   
   
   
   
   
}else if($help->get_password_match($_SESSION["password"],$_SESSION["username"])==false){
    $smarty->display('Warning.tpl');
}


}else if(empty ($_SESSION["username"]) and empty($_SESSION["password"])){
    echo "you didnot login please login to see your  articles if you have any articles";
}
  $smarty->display('footer.tpl');
}



}

$particular_writer=new View_articles_particular_author;

$particular_writer->process_particular_articles();
?>