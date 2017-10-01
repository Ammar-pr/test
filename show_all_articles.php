

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
$smarty->display('header.tpl');
//** un-comment the following line to show the debug console
//$smarty->debugging = true;






   
   $articles_all=$help->dissplay_art_for_all();;
   
   
   
 


   
   
     if($articles_all!=null)
   {
       $smarty->assign('list_articles', $articles_all);
   
   
  $smarty->display('show_all.tpl');
  }else if($articles_list_object==null) {
       echo "dont have any articles in the dataBase please make a new one - ";
   }
   
   
   
   
   
   
   $smarty->display('footer.tpl');
   
}




}

$show_me=new show_all_article;

$show_me->process_show_ar();
?>