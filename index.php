

<?php
session_start();
//require_once(SMARTY_DIR . 'C:/AppServ/www/project/registration_GIT/smarty-master/libs/Smarty.class.php');
require 'helpFunction.php';
$help = new helpFunction;
$help->path_activate_smarty();
$smarty = new Smarty();
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'configs/';
$smarty->cache_dir = 'cache/';
//$smarty->assign('name','fff');
//** un-comment the following line to show the debug console
//$smarty->debugging = true;
$smarty->display('index.tpl');






?>