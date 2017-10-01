<?php

class logout {

function process_logout () {
    

//require_once(SMARTY_DIR . 'C:/AppServ/www/project/registration_GIT/smarty-master/libs/Smarty.class.php');
require 'helpFunction.php';
$help = new helpFunction;
$help->path_activate_smarty();
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';
    
    
session_start();

if (isset($_SESSION["username"]) and isset($_SESSION["password"]))
{
    echo "log out is done";

session_unset();
header("location:index.php");

    
}else if(isset($_SESSION["username"])==false and isset($_SESSION["password"])==false){
    echo  "you didn't login can not make log out !";
    
                                   echo "
<meta http-equiv='refresh' content='0.22; url=logint.php'>
";
}



}
}


$lo = new logout;

$lo->process_logout ();
?>