

<?php
//require_once(SMARTY_DIR . 'C:/AppServ/www/project/registration_GIT/smarty-master/libs/Smarty.class.php');
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
$smarty->assign('name','fff');
//** un-comment the following line to show the debug console
//$smarty->debugging = true;



if (isset($_SESSION["username"]) and isset($_SESSION["password"])){
//function get_password_match ($pass,$user) {



if($help->get_password_match($_SESSION["password"],$_SESSION["username"])==true)
{
   $usuer_id= $help->querying_user($_SESSION["username"],$_SESSION["password"]);
   //echo "the id is ".$usuer_id;
    $smarty->assign('usuer_id',$usuer_id);
    $smarty->display('new_article.tpl');
}else if($help->get_password_match($_SESSION["password"],$_SESSION["username"])==false){
    $smarty->display('Warning.tpl');
}


}



?>