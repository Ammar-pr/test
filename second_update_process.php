

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
require_once 'helpFunction.php';
require_once 'Article.php';
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
 
    /*
     there is no need to check post values here because it was send it like stored varirbe in table articles
     * the reasons for sending to page second_update_process.tpl to show it and put in text editor mode 
     * so the writer can edit his  article
     */

     
//     if(isset($_GET["id"])){
//         
//      $vr="qwertyuiop[]asfghjkl;'/\zxcvbnm''";
//      $status=false;
//     if( preg_match($vr, $_GET["id"]==false || preg_match($vr, $_GET["id"])==null )){
//      $status=true;
//     }else if(preq_match("/\w*((\%27)|(\'))((\%6F)|o|(\%4F))((\%72)|r|(\%52))/ix",$_GET["id"])==false  ||preq_match("/\w*((\%27)|(\'))((\%6F)|o|(\%4F))((\%72)|r|(\%52))/ix",$_GET["id"])==null  ){
//         $status=true;
//         
//       
//       
//     }else {
//         $status= false ;
//     }
     
     
    $smarty->assign('id',intval($_GET["id"]));   
   $ar= new  Article ;
    $article_writer=  $ar->getArticleObject(intval($_GET["id"]));
     
    if(count($article_writer)>0)
    {
     $smarty->assign('article_writer',$article_writer);
   /*
    * in this case the code should bring the article infromation {title ,contenct} and send it 
    * to second_update_process by smarty 
    */
   
   
    $smarty->display('second_update_process.tpl');
     
    }else {
        echo "there is no article for this user ";
    }
    
    }
     
     }else if(empty ($_SESSION["username"]) and empty($_SESSION["password"])){
    echo "<br> you didnot login please login to delete if you  an articles";
}
     
 // from here lets try something ! sending an array 
///}

//else if($help->get_password_match($_SESSION["password"],$_SESSION["username"])==false){
 //   $smarty->display('Warning.tpl');
//}

$smarty->display('footer.tpl');

}
}





$update_me=new Update_article;

$update_me->process_update();
?>