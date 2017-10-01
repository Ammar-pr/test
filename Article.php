<?php
require_once 'helpFunction.php'; 

class Article{
    
    
   protected $title ;
   protected $article_contecnt ;
    

   
   function getArticleObject ($id) {
    //$sqlhelp = new sqlHelper;
  //  return $articles;
 try {
    $articles= R::getAll( 'select * from articles where id= "'.$id.'" ' );
    $bar = R::convertToBeans( 'user', $articles );  
    return $articles;
} catch (RedBeanPHP\RedException\SQL $e) {
    echo $e->getMessage();

       
   
   }
   
   
}
function process_article() {
 
    $articlesList=null;
    // title
    // content_article
    // user_id_hidden
    // case_to_be
    
   // htmlspecialchars($_POST["title"]);
   // htmlspecialchars($_POST["content_article"]);
   // htmlspecialchars($_POST["user_id_hidden"]); // just in case the hacker change the paramter 
   // htmlspecialchars($_POST["case_to_be"]);// just in case the hacker change the paramter 
    
    if( htmlspecialchars($_POST["case_to_be"])=="1"){
          $sqlhelp = new sqlHelper;
        // save article
        /*
         title
         user_id
         article_content
         the_date
         */
          $newArticle= R::dispense('articles');

              //rb-mysql.php
    //  $what=$_POST['what'];
    // date("l jS \of F Y h:i:s A")  
         $newArticle->title=htmlspecialchars($_POST["title"]);
         $newArticle->article_content=htmlspecialchars($_POST["content_article"]);
         $newArticle->user_id=htmlspecialchars($_POST["user_id_hidden"]);
          $newArticle->the_date=htmlspecialchars($_POST["user_id_hidden"]);
          // how to mange updateds 
        // $newArticle->the_date=date("l jS \of F Y h:i:s A")  ;
    $record_id=     R::store($newArticle); // store is done 
    
   if($record_id>0){  
     // add new record is done , because function store return the number of the new record
     // refere this information in this link 
     // https://redbeanphp.com/manual3_0/index.php?p=/manual3_0/create_a_bean
       R::close();
       
        header('Location: View_articles_particular_author.php');
   }
    }else if(htmlspecialchars($_POST["case_to_be"])=="2")
    {
        $help=new helpFunction;
        // update article
        // update_article($title,$cont,$acId) 
        
        $help->update_article(htmlspecialchars(htmlspecialchars($_POST["title"])),htmlspecialchars($_POST["content_article"]),htmlspecialchars($_POST["id"])) ;
        
    }else if(htmlspecialchars($_POST["case_to_be"])=="3")
    {
        // view user specific article
        //You must check the length of the array

        
        $articlesList=dissplay_art_for_user(htmlspecialchars($_POST["user_id_hidden"]));
       if(count($articlesList)>0){
           return $articlesList;
       }else {
           echo "sorry there is no articles for you  ";
       }
        
// acess point to be use in dissplay result articles List objects 
    }else if(htmlspecialchars($_POST["case_to_be"])=="4")
    {
        //   article dissplay_art_for_all()
      
       return   $articlesList=  dissplay_art_for_all();
        
    }else if(htmlspecialchars($_GET["case_to_be"])=="5")
    {
      //  echo "case number 5";
        
          if(intval($_GET["id"])!=null){
            
        
    $help=new helpFunction;
          $help->delete_article(intval($_GET["id"]));}
    } else {
        // nothing to use with this class  only calling a methods getArticleObject but not directly
    }
}


}
  $ar  = new Article;
  
 // $ar->getArticleObject(1);

 $ar->process_article();


        






?>